<?php
    function conferirLogin($loginUsuario, $senhaUsuario){
        $arquivo = file_get_contents("./json/usuarios.json");
        $usuarios= json_decode($arquivo);
        foreach($usuarios as $user){
            if($user["login"]== $loginUsuario && $user["senha"]==$senhaUsuario){
                return true;
            }
        }
        return false;
    }
    
    class Usuario{
        var $nome;
        var $email;
        var $login;
        var $senha;

        function __construct($nome, $email, $login, $senha){
        $this->nome= $nome;
        $this->email= $email;
        $this->login= $login;
        $this->senha= $senha;
        }
    }
    
    function cadastroUsuario($nome, $email, $login, $senha){
        $arquivo = fopen("./json/usuarios.json", "r+");
        $usuario = new Usuario($nome,$email,$login,$senha);
        $info=json_encode($usuario);
        fseek($arquivo, 0, SEEK_SET);
        fwrite($arquivo, $info);
        fclose($arquivo);
    }
?>