<?php
require "classes/questions.php";
require "classes/user.php";

session_start();
if (!isset($_SESSION["user"])) {
    header("Location: index.php");
}
$username =  $_SESSION["user"];
$user = new Usuario($username);

$question_id = 0;

$question = new Questions;
$pergunta = $question->load_question($question_id);
$alternativas = $question->load_option($question_id);
$resposta = $question->load_answer($question_id);

if (isset($_GET["id"])) {
    $question_id = $_GET["id"];
}

if (isset($_POST["answer"])) {
    $previous_answer = $_POST["answer"];
    $previous_option_selected = $_POST["option"];

    // atualiza cookie com score máximo

    if ($previous_answer == $previous_option_selected) {
        if ($user->__getPontuacao() < 5) {
            $user->aumentarPontuacao();
        }
    }

    if ($previous_answer != $previous_option_selected) {
        header("Location: perdeu.php");
        exit();
    }

    if ($question_id == 5 && $previous_answer == $previous_option_selected) {
        header("Location: win.php");
        exit();
    }

    // $score = $question_id - 1;
    // if (isset($_COOKIE[$user . "-max"]) && $_COOKIE[$user . "-max"] > $score) {
    //     $score = $_COOKIE[$user . "-max"];
    // }
    // setcookie($user . "-max", $score);

}


$question = new Questions;
$pergunta = $question->load_question($question_id);
$alternativas = $question->load_option($question_id);
$resposta = $question->load_answer($question_id);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show do Bilhão</title>
</head>

<body>
    <?php include "partials/header.inc"; ?>

    <br>
    <h2><?= $pergunta ?></h2>

    <form action="pergunta.php?id=<?= $question_id + 1 ?>" method="post">
        <input type="radio" name="option" value="0" id="">
        <label for="0"><?= $alternativas[0] ?></label> <br>
        <input type="radio" name="option" value="1" id="">
        <label for="1"><?= $alternativas[1] ?></label> <br>
        <input type="radio" name="option" value="2" id="">
        <label for="2"><?= $alternativas[2] ?></label> <br>
        <input type="radio" name="option" value="3" id="">
        <label for="3"><?= $alternativas[3] ?></label> <br>
        <input type="hidden" name="answer" value="<?= $resposta ?>">
        <input type="submit" value="Enviar">
    </form>

    <?php include "partials/footer.inc"; ?>
</body>

</html>