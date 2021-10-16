<?php
    /** Inclusões */
    require 'perguntas.inc';

    $arquivo = fopen("users.txt", "a");
    session_start();
    
    class usuario {
        private string $nome;
        private string $email;
        private string $login;
        private string $senha;
        private string $ultAcesso;
        private string $ultPont;

        function __construct($nome, $email, $login, $senha){
            $this->nome = $nome;
            $this->email = $email;
            $this->login = $login;
            $this->senha = $senha;
            $this->ultAcesso = date("d/m/Y");
            $this->ultPont = 0;
        }
        function destruct(){
            __destruct();
        }
        function getNome(){ return $this->nome; }
        function getEmail(){ return $this->email; }
        function getLogin(){ return $this->login; }
        function getSenha(){ return $this->senha; }
        function getUltAcesso(){ return $this->ultAcesso; }
        function setUltAcesso($data){ $this->ultAcesso = $data; }
        function getUltPont(){ return $this->ultPont; }
        function setUltPont($pontos){ $this->ultPont = $pontos; }
    }

    $_SESSION["login"] = htmlspecialchars($_POST['login']);
    $_SESSION["email"] = htmlspecialchars($_POST['email']);
    $_SESSION["nome"] = htmlspecialchars($_POST['nome']);
    $_SESSION["senha"] = htmlspecialchars($_POST['senha']);

    $usuario = new usuario($_SESSION["nome"], $_SESSION["email"], $_SESSION["login"], $_SESSION["senha"]);
    
    // salva as informações do usuario no arquivo;
    fwrite($arquivo, $usuario->getNome()); 
    fwrite($arquivo, " ");
    fwrite($arquivo, $usuario->getEmail());
    fwrite($arquivo, " ");
    fwrite($arquivo, $usuario->getLogin());
    fwrite($arquivo, " ");
    fwrite($arquivo, $usuario->getSenha());
    fwrite($arquivo, " ");
    fwrite($arquivo, $usuario->getUltAcesso());
    fwrite($arquivo, " ");
    fwrite($arquivo, $usuario->getUltPont());
    fwrite($arquivo, "\n");
    
    fclose($arquivo);
    session_destroy();

    // enviando alerta de usuario cadastrado
    $message = "Cadastro realizado com Sucesso! ";
    echo "<script type='text/javascript'>alert('$message');</script>";

    redireciona(); // dentro de perguntas.inc    
?>