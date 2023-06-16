<?php
session_start();
include "../dadosPerguntas.inc";

function ConfereLogin(){
    $nome = $_POST["login"];
    $senha = $_POST["senha"];

    global $usuarioAutorizado;
    global $senhaUsuarioAutorizado;

    if($nome == $usuarioAutorizado && $senha == $senhaUsuarioAutorizado){
        $_SESSION["autenticado"] = true;
        require "../Pages/PaginaInicial.php";
    }else{
        require "../index.php";
    }
}

ConfereLogin();

?>