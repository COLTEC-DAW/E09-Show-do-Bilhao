<?php
    session_start();
    include "menu.inc";
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
        <?php
        //requires
        require "questions.inc";
        require "user.inc";

        //variaveis
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
                $_POST['idQuestion']++;

                $_POST['Score']++;
                
            
            }else{
                $_POST['lose'] = true;
            }
        }

        if($_POST["idQuestion"] > 4){
            $q[4]->PrintEndGame();
        }elseif(!isset($_POST['lose'])){
            $q[$_POST['idQuestion']]->PrintQuestions($_POST['idQuestion']);
        }else{
            $q[$_POST['idQuestion']]->PrintLoserScreen();
        }

    ?>
</body>
</html>