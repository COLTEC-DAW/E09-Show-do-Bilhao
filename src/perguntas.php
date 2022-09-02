<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="perguntas.css">
    <title>Show do Bilhão</title>
</head>
<body>
    <?php
    define("NUMERO_PERGUNTAS", 4);
    $menu = "partials/menu.inc.php";
    $rodape = "partials/rodape.inc.php";
    $caminho_arquivo_partials_perguntas = "partials/perguntas.inc.php";
    $logout = "partials/logout.inc.php";
    
    if (is_readable($menu)) include $menu;
    if (is_readable($caminho_arquivo_partials_perguntas)) include $caminho_arquivo_partials_perguntas; 
    else {
        echo "Página fora do ar";
        exit(1);
    }

    session_start();
    
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        if(!isset($_SESSION['login']) && !isset($_SESSION['senha'])) header('Location: cadastro_usuario.php', TRUE, 301);
    }
    if ($_SERVER['REQUEST_METHOD'] === 'GET') {
        if(!isset($_SESSION['login']) && !isset($_SESSION['senha'])) header('Location: cadastro_usuario.php', TRUE, 301);
    }

    $AcertosUser = $_SESSION['login'] . 'acertos';

    $question = carregaPergunta($_POST['pergunta'], "perguntas.json");
    
    if($question->resposta == $_POST['alternativa']){
        $respostas_acertadas = $_POST['pergunta'] + 1;
        setcookie($AcertosUser, $respostas_acertadas);
        if($_POST['pergunta'] == NUMERO_PERGUNTAS){
            header("Location: ganhaste.php", TRUE, 301);
            exit(1);
        }
        $question = carregaPergunta($_POST['pergunta'] + 1, "perguntas.json");
        echo "Você já acertou {$respostas_acertadas} perguntas.";
    } else {
        header("Location: game_over.php", TRUE, 301);
    }

    ?>

    <h2><?= $question->enunciado ?></h2>
    <form action="perguntas.php" method="post">
        <input hidden name="pergunta" value=<?=$_POST["pergunta"] + 1?>>
        <?php for($j = 0; $j < count($question->alternativas); $j++){
        echo "
            <div>
                <input type='radio' id='{$j}' name='alternativa' value='{$j}'>
                <label for='{$j}'>{$question->alternativas[$j]}</label>
            </div>";
        }?>
        <br>
        <input type="submit" value="Enviar">
    </form>

    <?php
    if (is_readable($logout)) include $logout;

    ?>
    <?php
    if (is_readable($rodape)) include $rodape;
    ?>
</body>
</html>
