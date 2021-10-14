<?php
    session_start();
    
    if(!isset($_SESSION['usuario'])){
        if(isset($_POST['entrar'])){
            /* $login = 'vitoria';
            $loginForm = $_POST['usuario'];

            if($login == $loginForm){
                $_SESSION['usuario'] = $login;
                header("Location: /ShowDoBilhao/index.php");
            } */

            if(isset($_POST['usuario'])){
                $_SESSION['usuario'] = $login;
                header("Location: /ShowDoBilhao/index.php");
            }


            else{
                echo "invalido";
            }
        }

        include "./login.php";
    }
    else{
        if(isset($_GET['logout'])){
            unset($_SESSION['usuario']);
            session_destroy();
            header("Location: /ShowDoBilhao/inicio.php");
        }
        include "./index.php";
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>