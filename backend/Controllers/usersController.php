<?php
require "../Models/User.inc";

session_start();
function adicionaSignUp(){
    $nome = $_POST["nome"];
    $login = $_POST["login"];
    $senha = $_POST["senha"];
    $email = $_POST["email"];
    $nomeArquivo = $_SERVER['DOCUMENT_ROOT'] . '/Data/users.json';
    
    $usersJson = file_get_contents($nomeArquivo);
    $usersArray = json_decode($usersJson, true);
    
    $novoUser = new  User($nome, $login, $senha, $email);


    array_push($usersArray, $novoUser);
    $data = json_encode($usersArray, JSON_PRETTY_PRINT); 

    file_put_contents($nomeArquivo, $data);
    require "../../frontend/Pages/Login.php";
    }

    function confereLogin(){
        $login = $_POST["login"];
        $senha = $_POST["senha"];
        global $user;
        
        $nomeArquivo = $_SERVER['DOCUMENT_ROOT'] . '/Data/users.json';
    
        $usersJson = file_get_contents($nomeArquivo);
        $usersArray = json_decode($usersJson, true);
        $autenticado = false;
        
        foreach($usersArray as $user){
            if($login == $user['login']){
                if($senha == $user['senha']){
                    $_SESSION["user"]=$user;
                    $autenticado=true;
                    break;
                }else{
                    $autenticado=false;
                }
            }
        }
        
        if($autenticado){
            require "../../frontend/Pages/paginaInicial.php";
        }else{
            require "../../index.php";
        }
    }
   
   
?>

