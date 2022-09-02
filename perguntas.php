<?php 
    session_start();
    if(!isset($_SESSION['controle'])){
        $_SESSION['controle'] = 1;
        header("Location: login.php");
        $_SESSION['pontos'] = 0;
    }
    if(isset($_POST["login"]) && isset($_POST["senha"])){
        $controle_login = 0;
        $controle_senha = 0;
        $jsonF = file_get_contents("usuarios.json");
        $jsonDecod = json_decode($jsonF, true);
        foreach($jsonDecod as $user){
            if($_POST["login"] == $user["login"]){
                $controle_login++;
                if($_POST["senha"] === $user["senha"]){
                    $controle_senha++;
                }
            }
        }
        if($controle_login == 1 && $controle_senha == 1){
            $_SESSION['login'] = $_POST["login"];
            $_SESSION['senha'] = $_POST["senha"];
            $_SESSION['pontos'] = 0;
        }else{
            echo("<h2> Usuario ou senha incorreto!!</h2>");
            header("Location: login.php?id=" . 1); 
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="estilo.css">
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
            require "perguntas.inc";

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