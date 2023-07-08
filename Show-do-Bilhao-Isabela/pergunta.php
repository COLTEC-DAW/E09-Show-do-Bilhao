<?php
require("perguntas.class.php");

session_start();

$questions = new Questions();

$cookieName = 'pontuacao'; 

if (!isset($_SESSION['jogando']) || $_SESSION['jogando'] === false) {
    
    if (isset($_COOKIE[$cookieName])) {
        setcookie($cookieName, '', time() - 3600, '/');
    }

    $_SESSION['jogando'] = true;
    $_SESSION['pontuacao'] = 0;
}

$questionId = isset($_GET["id"]) ? $_GET["id"] : 0;

$pergunta = $questions->loadQuestion($questionId);
$alternativas = $questions->loadOptions($questionId);

$respostaSelecionada = null;
$respostaCorreta = null;

if (isset($_POST["submit"])) {
    $respostaSelecionada = $_POST["option"];
    $respostaCorreta = $questions->getCorrectAnswer($questionId);

    if ($respostaSelecionada == $respostaCorreta) {
        $_SESSION['pontuacao']++; 
        setcookie($cookieName, $_SESSION['pontuacao'], time() + (86400 * 30), "/");
        if ($questionId == $questions->getTotalQuestions() - 1) {
            header("Location: Ganhou.php");
            exit();
        } else {
            header("Location: pergunta.php?id=".($questionId+1));
            exit();
        }
    } else {
        header("Location: GameOver.php");
        exit();
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css" />
    <title>Esse é o Show do Bilhão</title>
</head>
<body>
<div class="central">
    <h2><?= $pergunta ?></h2> 
    <form action="pergunta.php?id=<?= $questionId ?>" method="post">
        <?php foreach ($alternativas as $index => $alternativa) { ?>
            <input type="radio" name="option" value="<?= $index ?>" id="option<?= $index ?>" <?php if ($respostaSelecionada == $index) echo "checked"; ?>>
            <label for="option<?= $index ?>"><?= $alternativa ?></label><br><br>
        <?php } ?>
        <button class="butaoLog" type="submit" name="submit" value="Enviar">Enviar</button>
    </form>
</div>
</body>
</html>
