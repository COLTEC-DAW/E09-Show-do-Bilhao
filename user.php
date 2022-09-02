<?php
    final class User{
        public $nome;
        public $email;
        public $usuario;
        public $senha;

        public function __construct($nome, $email, $usuario, $senha){
            $this->nome = $nome;
            $this->email = $email;
            $this->usuario = $usuario;
            $this->senha = $senha;
        }
    }
?>