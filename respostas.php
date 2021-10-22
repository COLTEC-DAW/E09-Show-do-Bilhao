<?php
    session_start();
    require "perguntas.inc";
    $id = $_POST["id"];
    $alternativa = $_POST["forms"];
    $resposta = $_POST["resposta"];
    $dadosJson = file_get_contents('perguntas.json');
    $dadosJsonDecode = json_decode($dadosJson, true);
    
    if ($alternativa == $resposta){
        $_SESSION['pontos'] ++;
        if(($id + 1) == count($dadosJsonDecode["perguntas"][$id]["alternativas"])){
            header("Location: venceu.php");    
        }else{
            header("Location: perguntas.php?id=" . $id + 1);
        }
    }else{
        header("Location: gameover.php");
    }




?>