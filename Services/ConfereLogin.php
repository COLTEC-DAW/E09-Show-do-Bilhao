<?php
include "../dadosPerguntas.inc";

function ConfereLogin(){
    $nome = $_POST["login"];
    $senha = $_POST["senha"];

    global $usuarioAutorizado;
    global $senhaUsuarioAutorizado;

    if($nome == $usuarioAutorizado && $senha == $senhaUsuarioAutorizado){
        require "../Pages/PaginaInicial.html";
    }else{
        require "../index.php";
    }
}

ConfereLogin();

?>