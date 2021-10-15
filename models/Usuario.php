<?php
    class Usuario{

        var $login;
        var $nome;
        var $senha;
        var $email;

        public function __construct ($login, $nome, $senha, $email){

            $this->login = $login;
            $this->nome = $nome;
            $this->senha = $senha;
            $this->email = $email;
        }
    }
?>  