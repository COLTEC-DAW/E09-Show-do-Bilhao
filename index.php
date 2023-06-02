<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show do Bilhão</title>
</head>
<body>
    <?php

    require "questions.inc";

    $id = 0;

    $file_json = json_decode(file_get_contents("dados.json"));

    foreach($file_json as $f){
        $q = new Perguntas($file_json[$id]->question, $file_json[$id]->options, $file_json[$id]->answer);
        $q->PrintQuestions($id);
        $id++;
    }


    ?>
</body>
</html>