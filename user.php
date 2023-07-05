<?php
    class User{
        public $login;
        public $senha;
        public $nome;
        public $email;

        public function __construct($login, $senha, $email, $nome){
            $this->login = $login;
            $this->senha = $senha;
            $this->nome = $nome;
            $this->email = $email;
        }    
    }

?>