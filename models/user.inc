<?php 
    class User{    
        $nome; $login; $passowrd; $email;

        public function __construct($nome, $login, $passowrd, $email){
            $this->nome = $nome;
            $this->login = $login;
            $this->passowrd = $passowrd;
            $this->email = $email;
        }
    }
?>