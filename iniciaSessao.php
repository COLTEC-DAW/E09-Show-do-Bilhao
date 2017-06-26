<?php
    /*
    * Set de cookies e variáveis de Session
    */
    ob_start();
    require 'functions.inc';
    $array = decodifica("users.json");

    if(UserRepetido($_POST["login"], $array, "login") && UserRepetido($_POST["senha"], $array, "senha")){
        session_start();
        $_SESSION["nome"] = $_POST["login"];
        $_SESSION["senha"] = $_POST["senha"];
        setcookie("pergunta", 0);
        if(!isset($_COOKIE["pontos"])){
            setcookie("pontos", 0);
        }
        if(!isset($_COOKIE["tentativa"])){
            date_default_timezone_set('America/Sao_Paulo');
            setcookie("tentativa", date("d/m/Y - H:i:s"));
        }
        header("location: perguntas.php");
    }
    else{
        echo "<h1>Login ou senha inválidos</h1>";
        echo "<form action=\"login.php\" method=\"POST\">";
        echo "<input type=\"submit\" value=\"Voltar\">";
        echo "</form>";
    }
?>