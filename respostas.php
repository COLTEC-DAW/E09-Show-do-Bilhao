<?php
    require "./perguntas.inc";
    $id = $_POST["id"];
    $alternativa = $_POST["forms"];
    $resposta = $_POST["resposta"];

    if ($alternativa == $resposta){
        $_SESSION['pontos'] ++;
        if(($id + 1) == count($GLOBALS["alternativas"])){
            header("Location: venceu.php");    
        }else{
            header("Location: perguntas.php?id=" . $id + 1);
        }
    }else{
        header("Location: gameover.php");
    }




?>