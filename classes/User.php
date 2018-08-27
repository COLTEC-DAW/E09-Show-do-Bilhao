<?php

    class User{
        var $username;
        var $email;
        var $nome;
        var $senha;
        var $score;
        var $lastLogin;

        function __construct($username, $email, $nome, $senha, $score){
            $this->username = $username;
            $this->email = $email;
            $this->nome = $nome;
            $this->senha = $senha;
            $this->score = $score;
            $this->lastLogin = date("Y-m-d H:i:s");
        }

        
    }

?>