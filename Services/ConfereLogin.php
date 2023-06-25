<?php
session_start();
function ConfereLogin(){
    $login = $_POST["login"];
    $senha = $_POST["senha"];
    
    $nomeArquivo = $_SERVER['DOCUMENT_ROOT'] . '/Data/users.json';

    $usersJson = file_get_contents($nomeArquivo);
    $usersArray = json_decode($usersJson, true);
    $autenticado = false;
    
    foreach($usersArray as $user){
        if($login == $user['login']){
            if($senha == $user['senha']){
                $_SESSION["user"] = $login;
                $_SESSION["senha"] = $senha;
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

ConfereLogin();

?>