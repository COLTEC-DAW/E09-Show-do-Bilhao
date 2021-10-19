<?php session_start() ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Login</title>
    </head>
    <body>
        <?php 
            if(!isset($_SESSION['login'])){
                if(isset($_POST['action'])){
                    $_SESSION['login'] = htmlspecialchars($_POST['login']);
                    header('Location: index.php');
                }   
                include('login.php');   
            }else{
                if(isset($_GET['logout'])){
                    unset($_SESSION['login']);
                    session_destroy();
                    header('Location: index.php');
                }
                setcookie('dateLastPlay', date('d/m/Y'));
                include('home.php');
            }
        ?>
    </body>
</html>





