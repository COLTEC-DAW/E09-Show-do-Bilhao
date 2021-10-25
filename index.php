<?php
    session_start();
    if (!isset($_SESSION['JohnOliver'])){
        $_SESSION['HobbesfaelMartins'] = 0;
        $_SESSION['JohnOliver'] = "Leandro Martins Maiachado";
        header("Location: loginPage.php");
    }if(isset($_POST['login'])){
        $_SESSION['HobbesfaelMartins'] = 0;
        $_SESSION['usuario'] = $_POST['login'];
    }
?>

<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Show do Bilhão</title>
</head>
<body>
    <div>
        <?php include "menu.inc"; ?>
    </div>
    <div>
        <p>
            <?php require "show.inc";
            if(empty($_GET))
            {
                $_SESSION['HobbesfaelMartins'] = 0;
                carregaPergunta(1); 
            }
            else
            {
                $_SESSION['HobbesfaelMartins'] = $_GET['id'] - 1;
                carregaPergunta($_GET['id']); 
            }
            ?>
        </p>
    </div>
    <div>
        <?php
            if (isset($_COOKIE["lastScore" . $_SESSION["usuario"]]) && isset($_COOKIE["lastGame" . $_SESSION["usuario"]])) { ?>
                <h3> Dados da ultima sessão:</h3>
                <h5>Jogo: <?= $_COOKIE["lastGame" . $_SESSION["usuario"]] ?></h5>
                <h5>Pontuação: <?= $_COOKIE["lastScore" . $_SESSION["usuario"]] ?></h5><?php 
            } 
        ?>
        <br>
    </div>
    <div>
        <?php include "botaoSair.inc"; ?>
    </div>
    <div>
        <?php include "rodape.inc"; ?>
    </div>
</body>
</html>