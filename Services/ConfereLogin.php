<?php
session_start();
include "../Models/Perguntas.inc";

function ConfereLogin(){
    $nome = $_POST["login"];
    $senha = $_POST["senha"];

    global $usuarioAutorizado;
    global $senhaUsuarioAutorizado;

    if($nome == $usuarioAutorizado && $senha == $senhaUsuarioAutorizado){

        $_SESSION["user"] = $nome;
        $_SESSION["senha"] = $senha;

        require "../index.php";

    }else{
        require "../index.php";
    }
}

ConfereLogin();

?>