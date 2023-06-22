<?php
function criaUsuario($usuario, $nome, $senha, $pontuacao){
    $usuario->$nome=$nome;
    $usuario->$senha=$senha;
    $usuario->$pontuacao=$pontuacao;
}
?>