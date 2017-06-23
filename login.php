<?php ob_start(); ?>
<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
    </head>
    <body>
        <?php
            session_start();
            setcookie("pergunta", null); //Unset do cookie pergunta
            session_destroy(); ?>
        <h1>Bem Vindo ao $how do Bilhão</h1>
        <h3>Faça login para jogar ou cadastre uma nova conta em nosso sistema!</h3>
        <form action="iniciaSessao.php" method="POST">
            Login: <input type="text" name="login"> <br>
            Senha: <input type="password" name="senha"> <br><br>
            <input type="submit" value="Log In"> <br><br>
        </form>
        <form action="cadastro.php" method="POST">
            <input type="submit" value="Cadastrar">
        </form>
    </body>
</html>