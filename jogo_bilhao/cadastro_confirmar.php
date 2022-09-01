<?php

require 'usuario.php';

function UsuarioExiste($conteudo, $caminhoArquivo){

    $arquivo = json_decode(file_get_contents($caminhoArquivo));

    foreach($arquivo as $usuario){

        if($usuario->email == $conteudo->email || $usuario->login == $conteudo->login) return TRUE;
        
    }
    return FALSE;
}

function EscreveNoArquivo($conteudo, $caminhoArquivo){

    $arquivoJSON = json_decode(file_get_contents($caminhoArquivo));
    $arquivo = $arquivoJSON;
    $UsuarioExiste = UsuarioExiste($conteudo, $caminhoArquivo);

    if($UsuarioExiste)return TRUE;
    else{
        
        array($arquivo);
        array_push($arquivo,$conteudo);
        file_put_contents($caminhoArquivo, json_encode($arquivo, JSON_PRETTY_PRINT));
    }
}

$dados = new Usuario($_POST['nome'], $_POST['email'], $_POST['login'], $_POST['senha']);

$UsuarioJaCadastrado = EscreveNoArquivo($dados, 'usuarios.json');

if ($UsuarioJaCadastrado)header("Location: erroCadastro.php");
else header("Location: login.php");

?>