<?php
    final class Usuario{

        public $nome;
        public $email;
        public $login;
        public $senha;

        public function __construct($nome, $email, $login, $senha){
            $this->nome = $nome;
            $this->email = $email;
            $this->login = $login;
            $this->senha = $senha;
        }
    }

?>