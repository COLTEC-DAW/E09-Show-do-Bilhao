<?php
class User{
    var $user;
    var $senha;
    var $email;
    var $nome;

    function __construct($login, $senha, $email, $nome){
        $this->login = $login;
        $this->senha = $senha;
        $this->email = $email;
        $this->$nome = $nome;
    }
}
?>