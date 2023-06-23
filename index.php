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

        //requires
        require "questions.inc";

        //variaveis
        $id = 0;
        $q = [];

        $file_json = json_decode(file_get_contents("dados.json"));//atribui os dados que estão no .json

        foreach($file_json as $f){
            array_push($q ,new Perguntas($f->question, $f->options, $f->answer));
        }
        
        if(!isset($_POST["idQuestion"]))
        {
            // Start from first question
            $_POST["idQuestion"] = 0;
        }

        if(isset($_POST['answer'])){
            if(intval($_POST['answer']) == intval($q[$_POST['idQuestion']]->correctAnswer)){
                //Go to next question
                // echo "Post: " . $_POST['idQuestion'];
                $_POST['idQuestion']++;
                $_POST['Score']++;
                // echo "Post: " . $_POST['idQuestion'];

            }else{
                $_POST['lose'] = true;
            }
        }

        if(!isset($_POST['lose'])){
            $q[$_POST['idQuestion']]->PrintQuestions($_POST['idQuestion']);
        }else{
            echo "You lose";
        }

    ?>
</body>
</html>