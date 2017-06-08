<?php
    session_start();
    if(session_id() == '' || !isset($_SESSION)){
          
        $_SESSION["nome"] = $_POST["login"];
        $_SESSION["senha"] = $_POST["senha"];
        $_SESSION["pergunta"] = 0;
        $_SESSION["tentativa"] = date("d/m/Y");
        header("location: perguntas.php?id=0");
        
    }
    else{
        header("location: perguntas.php?id=0");
    }   
?>