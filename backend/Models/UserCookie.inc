<?php 
class UserCookie{
    public $nome;
    public $ultimoAcesso;
    public $pontuacao;

    public function __construct($nome, $ultimoAcesso, $pontuacao){
        $this->nome = $nome;
        $this->ultimoAcesso = $ultimoAcesso;
        $this->pontuacao = $pontuacao;
    }
}


function criaUsuarioECookie( $nome, $ultimoAcesso, $pontuacao){
    $usuario = new UserCookie($nome, $ultimoAcesso, $pontuacao);
    
    setcookie("usuario-{$nome}",json_encode($usuario),  time()+3600, "/");
}

?>