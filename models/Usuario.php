<?php
    class Usuario{

        var $login;
        var $nome;
        var $senha;
        var $email;

        public function __construct ($login, $nome, $senha, $email){

            $this->login = htmlspecialchars($login);
            $this->nome = htmlspecialchars($nome);
            $this->senha = htmlspecialchars($senha);
            $this->email = htmlspecialchars($email);
        }
    }
?>  