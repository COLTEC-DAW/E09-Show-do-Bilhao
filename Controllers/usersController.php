<?php
require "../Models/User.inc";

session_start();
$usuario;
function adicionaSignUp(){
    $nome = $_POST["nome"];
    $login = $_POST["login"];
    $senha = $_POST["senha"];
    $email = $_POST["email"];
    $nomeArquivo = $_SERVER['DOCUMENT_ROOT'] . '/Data/users.json';
    
    $usersJson = file_get_contents($nomeArquivo);
    $usersArray = json_decode($usersJson, true);
    
    $novoUser = new  User($nome, $login, $senha, $email);
    print_r($novoUser);

    array_push($usersArray, $novoUser);
    $data = json_encode($usersArray, JSON_PRETTY_PRINT); 

    file_put_contents($nomeArquivo, $data);
    require "../Componentes/login.inc";
    }

    function confereLogin(){
        $login = $_POST["login"];
        $senha = $_POST["senha"];
        global $usuario;
        
        $nomeArquivo = $_SERVER['DOCUMENT_ROOT'] . '/Data/users.json';
    
        $usersJson = file_get_contents($nomeArquivo);
        $usersArray = json_decode($usersJson, true);
        $autenticado = false;
        
        foreach($usersArray as $user){
            if($login == $user['login']){
                if($senha == $user['senha']){
                    $_SESSION["user"] = $login;
                    $_SESSION["senha"] = $senha;
                    $usuario=new User($user['nome'], $user['login'], $user['senha'], $user['email']);
                    $autenticado=true;
                    break;
                }else{
                    $autenticado=false;
                }
            }
        }
        
        if($autenticado){
            require "../Pages/paginaInicial.php";
        }else{
            require "../index.php";
        }
    }

   
?>

