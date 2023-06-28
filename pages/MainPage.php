<?php
    if (session_status() === PHP_SESSION_NONE) {
        session_start();
    }
    //Registro
    require "../users/register.php";
    if (isset($_POST['register'])) {
        $reg = new register(htmlspecialchars($_POST['new_login']),htmlspecialchars($_POST['email']),htmlspecialchars($_POST['name']),htmlspecialchars($_POST['new_password']));
    }

    //Login
    require "../users/login.php";
    if (isset($_POST['log'])){
        $log = new login($_POST['login'], $_POST['password']);
    }

    //Impede anônimo de jogar
    if(isset($_GET['msg']))
    {
        $message = "Você precisa estar logado para jogar!";
    }

    if(isset($_SESSION['user'])){
        $login = $_SESSION['user'];
    }
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="https://avatars.githubusercontent.com/u/104566026?v=4" type="image/x-icon">
    <title>Show do Bilhão</title>
    <link rel="stylesheet" href="../css/MainPage.css">
</head>

<body>

    <div class="page-wrapper">

        <?php include "templates/header.inc"; ?>

        <main>
            <h1>Show do Bilhão</h1>

            <form action="Game.php" method="get">
                <input type="submit" value="Jogar">
                <input type="hidden" name="pergunta" value="1">
            </form>
        </main>

        <?php include "templates/message.inc"; ?>
        <?php include "templates/footer.inc"; ?>
    </div>
</body>
</html>