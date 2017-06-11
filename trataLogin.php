<?php
    session_start();
    $nome= $_POST["login"];
    $senha =  $_POST["senha"];
    
    if(empty($nome) || empty($senha)){
        header("location: index.php?id=404");
    }
    
    else{
        if (isset($_SESSION['usuario'])) {
            //echo "Bem vindo {$_SESSION['usuario']}!";
            //setcookie("pontos", 0);
            //setcookie("data", date("d/m/Y h:i:s", time()));
            //setcookie("pontos", 0);
            //setcookie("data", date("d/m/Y"));
            header("location: inicio.php");
        } else {
            //echo 'Você NUNCA passou por aqui.';
            $_SESSION['usuario'] = $nome;
            $_SESSION['senha'] = $senha;
            setcookie("pontos", 0);
            setcookie("data", date("d/m/Y"));
            header("location: inicio.php");
        }
    }
?>