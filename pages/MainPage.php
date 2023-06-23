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
        $message = "Você precisa estar logado para jogar, doidão!";
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
    <title>Show do Bilhão</title>
    <link rel="stylesheet" href="../css/MainPage.css">
</head>
<body>

<div class="page-wrapper">
    <nav class="navbar">
        <div class="user">
            <?php if (isset($login)): ?>
            <?php require "getFoto.php"?>
            <img src="../images/<?=getFoto($login)?>.png" alt="">
            <div class="name"><?=$login?></div>
            <?php endif; ?>
        </div>

        <div class="menu">
        <a href="Login.php">Entrar</a>
        <a href="Register.php">Cadastrar</a>
        <a href="logout.php">Sair</a>
        </div>
    </nav>

    <main>
    <h1>Show do Bilhão</h1>

    <form action="Game.php" method="get">
        <input type="submit" value="Jogar">
        <input type="hidden" name="pergunta" value="1">
    </form>
    </main>

    <?php if (isset($message)): ?>
        <div class="alert">
        <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
        <?=$message?>
        </div>
    <?php endif; ?>

    <footer>
        <img height="50%" src="../images/Coltec.png" alt="">
        <img height="50%" src="../images/SBT.png" alt="">
    </footer>

</div>
</body>
</html>