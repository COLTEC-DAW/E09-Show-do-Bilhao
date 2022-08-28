<?php
final class User{

    public string $login;
    public string $senha;
    public string $email;
    public string $nome;

    public function __construct($login, $senha, $email, $nome){
        $login = $this->login;
        $senha = $this->senha;
        $email = $this->email;
        $nome = $this->nome;
    }

}

?>