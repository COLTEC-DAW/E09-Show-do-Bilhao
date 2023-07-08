<?php

class User
{
    private $nome;
    private $email;
    private $senha;
    
    function getUser(){

        $info = array (
            "nome" => $this->nome,
            "email" => $this->email,
            "senha" => $this->senha,
        );

        return $info;
    }

    function __construct( $email,$nome, $senha){

        $this->nome= $nome;
        $this->email= $email;
        $this->senha= $senha;
        
    }


}

?>