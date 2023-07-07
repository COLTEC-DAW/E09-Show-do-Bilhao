<?php
session_start();

/* Meu index cumpre mais do q a função de um index normal pois ele realiza diversas tarefas*/
/* Obs: Criar dps algo para gerenciar isso melhor e mais organizado*/

require_once 'models/Usuario.php';
require_once 'models/Pergunta.php';

if (!isset($_SESSION['autenticado']) || !$_SESSION['autenticado']) {
    header("Location: login.php");
    exit();
}

if (!isset($_SESSION['id_pergunta']) || isset($_POST['reiniciar_jogo'])) {
    $_SESSION['id_pergunta'] = 0;
    $_SESSION['pontuacao'] = 0;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id_pergunta = $_SESSION['id_pergunta'];
    $resposta = $_POST['resposta'];

    $pergunta = Pergunta::carregarPergunta($id_pergunta);
    if ($pergunta !== false && $resposta === $pergunta->getResposta()) {
        $_SESSION['pontuacao']++;

        // Atualiza a maior pont somente se a atual for maior q a antiga
        if (isset($_SESSION['username']) && file_exists('temp/usuarios.json')) {
            $usuarios = json_decode(file_get_contents('temp/usuarios.json'), true);

            if (!isset($usuarios[$_SESSION['username']]) || $_SESSION['pontuacao'] > $usuarios[$_SESSION['username']]['maior_pontuacao']) {
                $usuarios[$_SESSION['username']]['maior_pontuacao'] = $_SESSION['pontuacao'];
                file_put_contents('temp/usuarios.json', json_encode($usuarios));
            }
        }
    } elseif (!isset($_POST['reiniciar_jogo'])) {
        header("Location: ./components/gameover.php");
        exit();
    }
    if (!isset($_POST['reiniciar_jogo'])) {
        $_SESSION['id_pergunta']++;
    }
}

if ($_SESSION['id_pergunta'] >= count(Pergunta::carregarPerguntas())) {
    header("Location: ./components/final.php");
    exit();
}

$id_pergunta = $_SESSION['id_pergunta'];
$pergunta = Pergunta::carregarPergunta($id_pergunta);

if ($pergunta !== false) {
    $enunciado = $pergunta->getPergunta();
    $alternativas = $pergunta->getAlternativas();
}

?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/style.css">
    <link rel="stylesheet" href="./assets/css/footer.css">
    <title>Show do Bilhao</title>
</head>

<body>

    <?php include("components/header.inc"); ?>

    <div class="main">
        <h2>Bem vindo ao game do Show do Bilhão!!</h2>

        <h2>Pergunta <?php echo ($id_pergunta + 1); ?></h2>
        <p><?php echo $enunciado; ?></p>

        <form method="POST" action="index.php?id=<?=($id_pergunta)+2?>">
            <?php foreach ($alternativas as $index => $alternativa) : ?>
                <input type="radio" name="resposta" value="<?php echo $index; ?>">
                <label><?php echo $alternativa; ?></label><br>
            <?php endforeach; ?>
            <br>
            <button type="submit">Enviar Resposta</button>
        </form>

        <p>Progresso atual: <?php echo $_SESSION['pontuacao']; ?> pontos </p>

        <?php if ($_SESSION['id_pergunta'] >= count(Pergunta::carregarPerguntas())) { ?>
            <h2>Fim</h2>
            <p>Pontuação: <?php echo $_SESSION['pontuacao']; ?> pontos</p>
            <form method="POST" action="./components/final.php">
                <button type="submit">Ver resultado final</button>
            </form>
        <?php } ?>


        <?php include("components/footer.inc"); ?>

    </div>

</body>

</html>
