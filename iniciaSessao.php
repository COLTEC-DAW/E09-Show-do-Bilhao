<?php
    /*
    * Set de cookies e variáveis de Session
    */
    session_start();
    $_SESSION["nome"] = $_POST["login"];
    $_SESSION["senha"] = $_POST["senha"];
    setcookie("pergunta", 0);
    if(!isset($_COOKIE["pontos"])){
        setcookie("pontos", 0);
    }
    header("location: perguntas.php");
?>