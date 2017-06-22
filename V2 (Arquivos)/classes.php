<?php
class Usuario {
    var $nome;
    var $login;
    var $email;
    var $senha;

    function __construct($nome, $login, $email, $senha){
        $this->nome = $nome;
        $this->login = $login;
        $this->email = $email;
        $this->senha = $senha;
    }
}
class Pergunta {
    var $pergunta;
    var $alternativas;
    var $correta;

    function __construct($pergunta, $alternativas, $correta){
        $this->pergunta = $pergunta;
        $this->alternativas = $alternativas;
        $this->correta = $correta;
    }
}
?>