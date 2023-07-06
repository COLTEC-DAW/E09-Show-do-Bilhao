<?php 
class Usuario {
    var $user;
    var $senha;

    public function __construct($user, $senha) {
        $this->user = $user;
        $this->senha = $senha;
    }
}
?>