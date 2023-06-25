<?php
session_start();
include "../Models/Perguntas.inc";

function ConfereLogin(){
    $nome = $_POST["login"];
    $senha = $_POST["senha"];

    global $usuarioAutorizado;
    global $senhaUsuarioAutorizado;
    global $usuarioAutorizado2;
    global $senhaUsuarioAutorizado2;
    

    if(($nome == $usuarioAutorizado ||$nome == $usuarioAutorizado2) && ($senha == $senhaUsuarioAutorizado ||$senha == $senhaUsuarioAutorizado2 )){

        $_SESSION["user"] = $nome;
        $_SESSION["senha"] = $senha;

        require "../Pages/PaginaInicial.php";

    }else{
        require "../index.php";
    }
}

ConfereLogin();

?>