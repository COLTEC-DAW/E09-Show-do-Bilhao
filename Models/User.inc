<?php 
class User{
    public $nome;
    public $senha;
    public $pontuacao;

    public function __construct($nome, $senha, $pontuacao){
        $this->nome = $nome;
        $this->senha = $senha;
        $this->pontuacao = $pontuacao;
    }
}


function criaUsuarioECookie( $nome, $senha, $pontuacao){
    $usuario = new User($nome, $senha, $pontuacao);
    
    setcookie("usuario-{$nome}",json_encode($usuario),  time()+3600, "/");
}

?>