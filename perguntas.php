<?php
require "perguntas.inc" ?>

<!DOCTYPE html>
<html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" ient="IE=edge">
    <meta name="viewport" ient="width=device-width, initial-scale=1.0">
    <title>Show do Bilhão</title>
</head>

<body>
    <h1>Show do Bilhão</h1>
    <?php



    $question = new Questoes($perguntas[$i], $alternativas[$i], $gabarito[$i]);

    //$questioncarregaPergunta($id);
    //$question.carregaPergunta($id);


    for ($i = 0; $i < count($perguntas); $i++) {
        $question = new Questoes($perguntas[$i], $alternativas[$i], $gabarito[$i]);
        ImprimiQuestoes();
    }

    ?>

</body>

</html>