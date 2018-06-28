<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Bem vindo</title>
</head>
<body>
    <?php session_start(); ?>
    
    <div class="justify-content-center d-flex">    
        <?php
            if (!isset($_SESSION["login"])){
                $_SESSION["login"] = $_POST["login"];
                $_SESSION["senha"] = $_POST["senha"];
            }

            echo "Login: ". $_SESSION["login"] . "<br>Senha: ". $_SESSION["senha"]; 
        ?>
        <br>
        <a class="btn btn-primary" href="logoff.php">SAIR</a>
    </div>



</body>
</html>
