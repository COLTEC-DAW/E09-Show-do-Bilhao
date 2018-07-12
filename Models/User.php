<?php

    class User implements DAO{
        var $nome;
        var $senha;
        var $login;
        var $email;
        var $ultima_visita;
        var $progresso;

        function __construct($nome, $senha, $login, $email) {
            $this->nome = $nome;
            $this->senha = $senha;
            $this->login = $login;
            $this->email = $email;
        }

        function getNome(){
            return $this->nome;
        } 

        function insert($user){
            $erro = "nenhum";
            if (isset($login) && isset($senha)){
                $Pessoa->nome = $_POST["nome"];
                $Pessoa->email = $_POST["email"];
                $Pessoa->login = $_POST["login"];
                $Pessoa->senha = $_POST["senha"];
        
                $PessoaJSON = json_encode($Pessoa);
                $ArquivoJSON = file_get_contents("Arquivos/users.json");
        
                // Verifica login //
                if (strpos($ArquivoJSON, "\"login\":\"".$Pessoa->login)){
                    $erro = "Nome de usuário já cadastrado";
                // Verifica  email //
                }else if (strpos($ArquivoJSON, "\"email\":\"".$Pessoa->login)){
                   $erro =  "Email já cadastrado";
                }else{
                    if($ArquivoJSON == "[]"){
                        $ArquivoJSON = str_replace("[", "[".$PessoaJSON, $ArquivoJSON);
                    }else{
                        $ArquivoJSON = str_replace("[", "[".$PessoaJSON.",", $ArquivoJSON);
                    }
                
                    $file = fopen("Arquivos/users.json", "w");
                    fwrite($file, $ArquivoJSON);
                    fclose($file); 
        
                    echo '<h1> Usuario Cadastrado com sucesso!<h1>';
                    sleep(2);
                    header("Location:index.php");
                }
        
            }
            return $erro;
        }

        function read(){

        }
    }


?>