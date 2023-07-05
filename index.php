<?php 
    require("user.php");
    require("login.inc");
?>
<!DOCTYPE html>

<html lang="pt-br">

    <head>
        <title> Show do Bilão </title>
        <meta charset="UTF-8">
    </head>

    <body>
        <h1> Show do Bilão </h1>
        <p> Seja bem vindo ao jogo <strong><br>Show do Bilhao do PrateEnlouquecer</strong>! </p>
        <div style="<?php
            if(isset($_SESSION['user'])){
                echo "display:none;";
            }
        ?>">
            <form method="POST">
                <label>LOGIN :<br></label>
                <input type="text" name="login">
                <label><br><br> SENHA :<br></label>
                <input type="password" name="senha"><br><br>
                <input type="submit" name="logar" value="Login">
                <input type="submit" name="registrar" value="Resgistrar">
            </form>  
        </div>
        <div style="<?php
            if(!isset($_SESSION['user'])){
                echo "display:none;";
            }
        ?>">
            <p><strong>Esse é Show do Bilão do Pratudo</strong>, onde se você acerta tudo, ganha <strong>nada!</strong> <br>E se vc acerta nada, ganha <strong>nada</strong> também :)
            </p>    
            <form action="perguntas.php" method="POST">
                <input type="submit" value="Jogar">
                <br><br>
                <input type="hidden" name="numQuestao" value="0">
            </form>            
            <form method="POST">
                <input type="submit" name="logOut" value="Deslogar">
            </form>
        </div>

    </body>
</html>