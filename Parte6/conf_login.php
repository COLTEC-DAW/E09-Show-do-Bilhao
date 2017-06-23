<?php

    session_start();


    if(file_exists("users.json")){
        $login = $_POST["login"];
        $senha = $_POST["senha"];
        $arquivo = file_get_contents('users.json');
        $conteudo = "";
        $ctrl = false;

        $json = json_decode($arquivo);


        foreach($json as $user){
            if($user->login == $login && $user->senha == $senha){
             
                $ctrl = true;
                $_SESSION["nome"] = $user->nome;
                $_SESSION["email"] = $user->email;
                
            }
        }

        
        if($ctrl=true){
   
            $_SESSION["login"] = $login;
            $_SESSION["senha"] = $senha;

            header('Location: info.php');
        }
        else{
            header('Location: login.php');        
        }
    }
    else{
        header('Location: login.php');
    }
?>

