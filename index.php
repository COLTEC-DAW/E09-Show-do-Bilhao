<?php
    //Inicia a sessão, requires e includes
    session_start();
    include "menu.inc";
    include "rodape.inc";
    require "questions.inc";
    require "user.inc";
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Show do Bilhão</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <?php
    
        //Variaveis
        $q = [];
        $file_json = json_decode(file_get_contents("dados.json"));//atribui os dados que estão no .json

        //Atribui tudo que esta no arquivo a o array 'q'
        foreach($file_json as $f){
            array_push($q ,new Perguntas($f->question, $f->options, $f->answer));
        }
        
        //Confere se 'idQuestion' existe
        if(!isset($_POST["idQuestion"]))
        {
            // Start from first question
            $_POST["idQuestion"] = 0;//Se não existir define como '0'
        }

        //Confere se o usuario apertou o botão que envia a resposta
        if(isset($_POST['answer'])){
            if(intval($_POST['answer']) == intval($q[$_POST['idQuestion']]->correctAnswer)){// Se ela for correta

                $_POST['idQuestion']++;//Aumenta o id da questão, ou seja, passa para a proxima

                $_POST['Score']++;//Aumenta a pontuação
                
            }else{
                $_POST['lose'] = true;//Se a resposta não estiver correta, atribui o '$_POST['lose]' como true
            }
        }

        //confere se o id da questão é o final, se sim, mostra a tela de vitória
        if($_POST["idQuestion"] > 4){
            $q[4]->PrintEndGame();
        }elseif(!isset($_POST['lose'])){// Confere se o '$_POST['lose']' é true, se não mostra a proxima pergunta 
            $q[$_POST['idQuestion']]->PrintQuestions($_POST['idQuestion']);
        }else{// Se perdeu for true, mostra a tela de derrota
            $q[$_POST['idQuestion']]->PrintLoserScreen();
        }

    ?>
</body>
</html>