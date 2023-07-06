<?php

    class Usuarios{

        var $nome;
        var $email;
        var $username;
        var $senha;

        public function __construct($prenom, $lemail, $lusername, $pass){
            
            $this->nome = $prenom;
            $this->email = $lemail;
            $this->username = $lusername;
            $this->senha = $pass;
        }
        
    }

    function userExiste($user, $senha, $usuarios){

        foreach ($usuarios as $usuario) {
            if ($usuario->username === $user && $usuario->senha === $senha) {
                return $usuario;
            }
        }
        return null;
    }

    function cadastrar($prenom, $lusername, $lemail, $pass){
        
        $novoUsuario = array(
            "nome" => $prenom,
            "username" => $lusername,
            "email" => $lemail,
            "senha" => $pass,
        );

        return $novoUsuario;

    }
?>