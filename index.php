<?php
    /*
    * Página unicamente para redirecionamento
    */
    ob_start();
    session_start();
    if(!$_SESSION["nome"]){
        header("location: login.php");
    }
    else{
        header("location: perguntas.php");
    }

?>