<?php 

class UserBanco{    
    public $nome;
    public $login;
    public $senha;
    public $email;

    public function __construct($nome, $login, $senha, $email){

        $this->nome = $nome;
        $this->login = $login;
        $this->senha = $senha;
        $this->email = $email;
    }
}
?>