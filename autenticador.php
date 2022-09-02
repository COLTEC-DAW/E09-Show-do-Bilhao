<?php
session_start();
try{
    $usuario_certo = "coltecano1";
    $senha_certa = "123coltec";

    $usuario_digitado = $_POST["user"];
    $senha_digitada = $_POST["pass"];

    if($usuario_digitado == $usuario_certo){
        if($senha_digitada == $senha_certa){
            $_SESSION["usuario_logado"] = $usuario_digitado;
            header("Location: perguntas.php?id=0");
        } 
        else {
            header("Location: login.php?falhou=true");
        }
    }
    else {
        header("Location: login.php?falhou=true");
    }
}
catch(Exception $e){
    echo $e->getMessage();
}

?> 
