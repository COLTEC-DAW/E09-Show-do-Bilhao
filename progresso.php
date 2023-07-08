<?php 

    require "perguntas.inc";
    session_start();
    $id = $_POST["id"];
    $pontuacao = $_POST["id"];
    $alternativas = $_POST["escolha"];
    $gabarito = $_POST["resposta"];

    $dadosJson = file_get_contents('questoes.json');
    $dadosJsonDecode = json_decode($dadosJson, true);

    if ($alternativas == $gabarito) {
   
        if (($id+1) == count($dadosJsonDecode)) {
            // setcookie('ultima_pontuacao', $pontuacao);
            // setcookie('ultima_acesso', date('d-m-Y H:i:s'));
            header("Location: zerou.php?pontuacao=". ($pontuacao + 1));
        }
        else {
            header("Location: perguntas.php?id=". ($id + 1));
        }
    }
    else {
        header("Location: gameOver.php?pontuacao=". ($pontuacao));
    }
    
?>