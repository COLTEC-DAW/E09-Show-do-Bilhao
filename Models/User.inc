<?php 
class User{
    public $nome;
    public $senha;
    public $pontuacao;
}

function criaUsuario($usuario, $nome, $senha, $pontuacao){
    $usuario->$nome=$nome;
    $usuario->$senha=$senha;
    $usuario->$pontuacao=$pontuacao;
}

?>