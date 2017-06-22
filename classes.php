<?php
    class User{
        var $nome;
        var $email;
        var $login;
        var $senha;
        
        function __construct($nome,$email,$login,$senha){
            $this->nome = $nome;
            $this->email = $email;
            $this->login = $login;
            $this->senha = $senha;
        }
    }
    
    class Question{
        var $per;
        var $alt;
        var $resposta;
        
        function __construct($pergunta,$alternativa,$resposta){
            $this->per = $pergunta;
            $this->alt = $alternativa;
            $this->resposta = $resposta;
        }
    }

?>