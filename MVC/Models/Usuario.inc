<?php 
class Usuario {
    var $login;
    var $senha;
    var $user;
    var $email;

    public function __construct($login, $senha, $user, $email) {
        $this->login = $login;
        $this->senha = $senha;
        $this->user = $user;
        $this->email = $email;
    }
}
?>