<?php
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
        echo $message;
    }

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show do Milhão</title>
    <link rel="stylesheet" href="../css/MainPage.css">
</head>
<body>

<img src="../images/SBT.png" alt="">
<img src="../images/show_do_milhao.png" alt="">
<img src="../images/Coltec.png" alt="">
<img src="../images/Coltec2.png" alt="">
    <h1>Jogo do Bixo</h1>

    <h2><a href="Logout.php">Sair</a></h2>
    <h2><a href="Login.php">Entrar</a></h2>
    <h2><a href="Register.php">Registrar</a></h2>


    <form action="Game.php" method="get">
        <input type="submit" value="Jogar">
        <input type="hidden" name="pergunta" value="1">
    </form>

</body>
</html>