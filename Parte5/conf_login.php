<?php

    $login = $_POST["login"];
    $senha = $_POST["senha"];

    if($login == "user" && $senha == "pwd"){

        session_start();
        
        $_SESSION["login"] = $login;
		$_SESSION["senha"] = $senha;



        header('Location: perguntas.php?id=0');
    }
    else{
        header('Location: login.php');        
    }
?>