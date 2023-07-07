<?php
    function conferirLogin($loginUsuario, $senhaUsuario){
        $nomeArquivo = $_SERVER['DOCUMENT_ROOT'] . '/json/usuarios.json';
        $usuariosJson= file_get_contents($nomeArquivo);
        $usuarios =json_decode($usuariosJson);
        foreach($usuarios as $user){
            if($user->login== $loginUsuario && $user->senha==$senhaUsuario){
                print_r($user->login);
                print_r($user->senha);
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
        $nomeArquivo = $_SERVER['DOCUMENT_ROOT'] . '/json/usuarios.json';
        $usuariosJson= file_get_contents($nomeArquivo);
        $usuarios =json_decode($usuariosJson);
        $usuario = new Usuario($nome,$email,$login,$senha);
        array_push($usuarios, $usuario);
        file_put_contents($nomeArquivo, json_encode($usuarios));
    }
?>