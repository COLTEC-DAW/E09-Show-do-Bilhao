<?php

    class Question {

        var $enunciado;
        var $alternativas;
        var $indiceCorreta; 

    }
    class User {

        var $nome;
        var $email;
        var $login;
        var $senha;

        function __construct($nome, $email, $login, $senha){

            $this->nome = $nome;
            $this->email = $email;
            $this->login = $login;
            $this->senha = $senha;

        }

    }

?>
