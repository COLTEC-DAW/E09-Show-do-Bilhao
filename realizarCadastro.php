<?php
    include "user.inc";
    $nome = htmlspecialchars($_POST["nome"]);
    $email = htmlspecialchars($_POST["email"]);
    $login = htmlspecialchars($_POST["login"]);
    $senha = htmlspecialchars($_POST["senha"]);

    if(file_exists("./users.json"))
    {
        if(filter_var($email, FILTER_VALIDATE_EMAIL))
        {
            if(isNewLogin($login))
            {
                userRegistration($nome, $email, $login, $senha);
                header("Location: ./telaLogin.php");
            }
            else
            {
                header("Location: ./cadastro.php?code=2");
            }
        }
        else
        {
            header("Location: ./cadastro.php?code=1");
        }
    }
    else
    {
        if(filter_var($email, FILTER_VALIDATE_EMAIL))
        {
            userRegistrationStartFile($nome, $email, $login, $senha);
            header("Location: ./telaLogin.php");
        }
        else
        {
            header("Location: ./cadastro.php?code=1");
        }
       
    }


?>
