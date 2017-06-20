<?php
    ob_start();
    require 'arquivos.inc';
    $usersdecode = decodeuser();
    
    $nome= $_POST["name"];
    $email =  $_POST["email"];
    $login= $_POST["login"];
    $senha =  $_POST["senha"];
    
    if(existeuser("email",$usersdecode,$email)){
        //JÁ EXISTE O EMAIL CADASTRADO
        echo 'JÁ EXISTE O EMAIL CADASTRADO';
    }
    else if(existeuser("login",$usersdecode,$login)){
        //JÁ EXISTE O NICK DIGITADO
        echo 'JÁ EXISTE O NICK DIGITADO';
    }
    else{
        //CADASTRA O USUSARIO
        $arquivo = fopen("usuarios.json","w");
        $array = array(
            'nome' => $nome,
            'email' => $email,
            'login' => $login,
            'senha' => $senha
        );

        array_push($usersdecode,$array);
        fwrite($arquivo,json_encode($usersdecode,JSON_PRETTY_PRINT));
        fclose($arquivo);
        header("location: index.php");
    }
    
?>