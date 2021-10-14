<?php
    class Usuario{
        var $Nome;
        var $NomeUsuario;
        var $Email;
        var $Senha;

        function __construct($nome, $nomeUsuario, $email, $senha){
            $this->Nome = $name;
            $this->NomeUsuario = $nomeUsuario;
            $this->Email = $email;
            $this->Senha = $senha;
        }
    }
?>