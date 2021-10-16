<?php
    class User{

        var $nome;
        var $usuario;
        var $email;
        var $senha;

        public function __construct ($usuario, $nome, $senha, $email){

            $this->nome = $nome;
            $this->usuario = $usuario;
            $this->email = $email;
            $this->senha = $senha;
        }
    }
?> 