<?php require "gameStructure.inc" ?>
<?php require "questions.inc" ?>
<?php
    //Game
    $game = new Game();
    $game->questions = [$question1, $question2, $question3, $question4, $question5];
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show do Bilhão</title>
</head>
<body>
    <?php include "header.inc"; ?>
    <?php
        foreach($game->questions as $question){
            echo "<h3>$question->enunciado</h3>";
            foreach($question->alternativas as $alternativa){
                echo "<h5>[$alternativa->letter] $alternativa->enunciado</h5>";
            }
            echo "<h6>$question->alternativaCertaIndex</h6>";
        }
    ?>
</body>
</html>