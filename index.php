<?php
    /*
    * Página unicamente para redirecionamento
    */
    session_start();
    if(!$_SESSION["nome"]){
        header("location: login.php");
    }
    else{
        header("location: perguntas.php");
    }

?>