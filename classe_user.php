<?php
    class User{
        private $login;
        private $senha;

        public function __construct($login, $senha){
            $this->login = $login;
            $this->senha = $senha;
        }

        public function GetLogin(){
            return $this->login;
        }

        public function GetSenha(){
            return $this->senha;
        }
    }
?>