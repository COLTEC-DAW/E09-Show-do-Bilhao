<?php
    class User{
        var $nome;
        var $senha;
        var $login;
        var $email;
        
        function __construct($nome, $senha, $login, $email) {
            $this->nome = $nome;
            $this->senha = $senha;
            $this->login = $login;
            $this->email = $email;
        }

        function verifica_login($senha){
            if ( $this->senha == $senha) {
                return true;
            }else{
                return false;
            }
        }
    
        function verifica_cadastro(){
            $erro = "nenhum";
            $ArquivoJSON = file_get_contents("Arquivos/users.json");

            // Verifica se login já foi cadastrado //
            if (strpos($ArquivoJSON, "\"login\":\"".$this->login)){
                $erro = "Nome de usuário já cadastrado";
            // Verifica  email já foi cadastrado //
            }else if (strpos($ArquivoJSON, "\"email\":\"".$this->email)){
                $erro =  "Email já cadastrado";
            }
            
            return $erro;
        }

    }
?>