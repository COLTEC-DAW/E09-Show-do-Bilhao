<?php

require "usuario.php";

function UsuarioExiste($conteudo, $caminhoArquivo){

    $arquivo = json_decode(file_get_contents($caminhoArquivo));

    foreach($arquivo as $usuario){

        if($usuario->email == $conteudo->email || $usuario->login == $conteudo->login){
            
            return TRUE;
        }
            
    }
    return FALSE;
}

function EscreveArquivo($dados, $caminhoArquivo){

    $arquivoJSON = json_decode(file_get_contents($caminhoArquivo));
    $arquivo = $arquivoJSON;
    $usuarioExiste = UsuarioExiste($dados, $caminhoArquivo);

    if($usuarioExiste){
        
        return TRUE;

    } else{
        
        array($arquivo);
        array_push($arquivo,$dados);
        file_put_contents($caminhoArquivo, json_encode($arquivo, JSON_PRETTY_PRINT));
    }
}

$dados = new Usuario($_POST["nome"], $_POST["email"], $_POST["login"], $_POST["senha"]);

$UsuarioCadastrado = EscreveArquivo($dados, "usuarios.json");

if ($UsuarioCadastrado){
    
    header("Location: erroCadastro.php");

}else header("Location: login.php");

?>