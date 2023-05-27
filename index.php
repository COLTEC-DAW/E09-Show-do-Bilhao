<?php require "gameStructure.inc" ?>
<?php require "questions.inc" ?>

<?php
    //Game
    $game = new Game();
    $game->questions = [$question1, $question2, $question3, $question4, $question5];

    
?>

<?php require "questions-function.inc" ?>
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
    <form action="index.php" method="post">
        <?php loadCurrentQuestion(); ?>
        <button type="submit" name="submit">Responder</button>
    </form>
</body>
</html>