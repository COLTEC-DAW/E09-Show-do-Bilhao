<?php
    require "partials/perguntas.inc";

    session_start();
    if (!isset($_SESSION["user"])) { 
        header("Location: index.php");
    }
    $user = $_SESSION["user"];

    $question_id = 0;

    if (isset($_GET["id"])) {
        $question_id = $_GET["id"];
    }

    if (isset($_POST["answer"])) {
        $previous_answer = $_POST["answer"];
        $previous_option_selected = $_POST["option"];

        // atualiza cookie com score máximo
        $score = $question_id - 1;
        if(isset($_COOKIE[$user."-max"]) && $_COOKIE[$user."-max"] > $score){
            $score = $_COOKIE[$user."-max"];
        }
        setcookie($user."-max", $score+1);

        // se diferente, então resposta é incorreta
        if ($previous_answer != $previous_option_selected) {
            header("Location: gameover.php");
        }
        // se igual a cinco, então ele respondeu todas corretamente!
        if ($question_id == 5 && $previous_answer == $previous_option_selected) {
            header("Location: gamewon.php");
        }
    }

    $question = carregaPerguntas($question_id, "json/perguntas.json");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/f294d9b5b8.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
    <title>Perguntas</title>
</head>
<body>
    <?php include "partials/cabecalho.inc"; ?>
    <br/>
    <h2><?= $question->enunciado ?></h2>
    <form action="perguntas.php?id=<?= $question_id+1?>" method="post">
        <input hidden name="pergunta" value="$question_id">
        <?php for($i = 0; $i < count($question->alternativas); $i++){
        echo "<div><input type='radio' id='{$i}' name='option' value='{$i}' id='' required><label for='{$i}'>{$question->alternativas[$i]}</label></div>";
        }?>
        <br>
        <input type="hidden" name="answer" value="<?= $question->resposta?>">
        <input type="submit" value="Enviar">
    </form>
    <br/>
    <?php include "partials/rodape.inc"; ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>
</html>