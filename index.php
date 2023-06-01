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

        require "questions.php";
        $d = 0;
        $file = json_decode(file_get_contents("dados.json"));
        
        foreach ($file as $f){
            new Perguntas($f[$d]->question, $f[$d]->options, $f[$d]->answer);
        }

        $this->PrintQuestions();

    ?>
</body>
</html>