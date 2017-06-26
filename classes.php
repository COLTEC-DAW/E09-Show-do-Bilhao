<?php

    class Usuario{
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

    class Pergunta{
        var $enunciado;
        var $alternativas;
        var $resposta;

        function __construct($enunciado, $alternativas, $resposta){
            $this->enunciado = $enunciado;
            $this->alternativas = $alternativas;
            $this->resposta = $resposta;
        }
    }
?>