<?php 
    session_start();
    if(!isset($_SESSION['controle'])){
        $_SESSION['controle'] = 1;
        header("Location: login.php");
        $_SESSION['pontos'] = 0;
    }
    if(isset($_POST["login"]) && isset($_POST["senha"])){
        $_SESSION['login'] = $_POST["login"];
        $_SESSION['senha'] = $_POST["senha"];
        if(!isset($_COOKIE["nome"]) || !isset($_COOKIE["pontos"])){
            setcookie("nome", $_SESSION['login'], time()+3600);
            setcookie("pontos", $_SESSION['pontos'], time()+3600);
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <?php
        include "./menu.php";
    ?>

    <div>
        <?php
            require "./perguntas.inc";

            if(empty($_GET)){
                mostra_pergunta(0);
            }else{
                mostra_pergunta($_GET['id']);
            }
           
        ?>
    </div>
    <?php
        include "./rodape.inc";
        if(isset($_COOKIE["nome"]) && isset($_COOKIE["pontos"])){
            echo "Ultimo Jogador: " . $_COOKIE["nome"] . " Pontos Ultimo Jogador: " . $_COOKIE["pontos"]; 
        }
    ?>

</body>
</html>