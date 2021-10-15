<?php
include "./perguntas.inc";
require "./classes/Question.php";

// Se o jogo estiver começando, define a primeira pergunta como aquela a ser exibida
if (!isset($_POST["id"])) {
    $id = 0;
} else {
    if (verificaID(intval(($_POST["id"])))) {
        $id = intval(($_POST["id"]));

        $anterior =  Question::carregaPergunta($id - 1);

        if (isset($_POST["alternativa"])) {
            if ($anterior->verificaResposta($_POST["alternativa"])) {
                // Se chegar ao final de jogo, salva o progresso e vai para a página de vitória
                if ($id >= 4) {
                    defineCookies($id);
                    header("Location: /win.php");
                }
            } else {
                // Se a resposta enviada estiver errada, salva o progresso e vai para a página de erro
                defineCookies($id - 1);
                header("Location: /gameOver.php");
            }
        } else {
            // Se nada for enviado, não muda de pergunta
            $id--;
        }
    } else {
        // Se algo estiver errado com o ID, nem carrega a pergunta
        header("Location: /gameOver.php");
    }
}

$pergunta = Question::carregaPergunta($id);
$numAcertos = $id;

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show do Bilhão</title>
</head>

<body class="container">
    <?php
    include "./menu.inc";
    ?>
    <br>
    <hr>
    <!-- Se chegou até aqui, tá tudo certo! -->
    <div class="content">
        <p><b>Número de acertos: <?= $numAcertos ?></b> </p>

        <h2>Pergunta:</h2>

        <h3><?= ($id + 1) ?>. <?= $pergunta->getEnunciado() ?></h3>

        <form method="post">
            <?php foreach ($pergunta->getAlternativas() as $index => $alternativa) { ?>
                <input type="radio" name="alternativa" value="<?= $index ?>">
                &nbsp&nbsp<?= $alternativa ?><br>
            <?php }; ?>

            <br>
            <input type="hidden" id="id" name="id" value="<?= ($id + 1) ?>">
            <button>Enviar</button>
        </form>
    </div>

    <?php
    include "./rodape.inc";
    ?>
</body>

</html>