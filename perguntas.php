<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pergunta Separada</title>
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>  
    <?php 
    session_start();
    if (!isset($_SESSION["login"])){
        if (!isset($_POST["login"])){ // Se não está logado
            header("Location:nao_identificado.php");
            exit();
        }else{
            $_SESSION["login"] = $_POST["login"];
            $_SESSION["senha"] = $_POST["senha"];
        }
    }
    include "Includes/menu.inc" ?> 

    <div class="welcome">
        <?php       
            echo "Bem-vindo ". $_SESSION["login"] . "<br>". $_COOKIE[$_POST["login"]];
        ?>
    </div>

    <div class="pergunta">
        <div class="progress">            
            <?php
                require "Includes/perguntas.inc";
                if ($_POST["pergunta".$_POST["id"]] != "alt".$certas[$_POST["id"] - 1]){ // Se errou 
                   $_SESSION["progess"] = ($_POST["id"]-1)*20;
                }else{
                    $_SESSION["progess"] = $_POST["id"]*20;
                }
            ?> 
                
                <div class="progress-bar progress-bar-striped" role="progressbar" style="width: <?php echo $_SESSION["progess"]; ?>%" aria-valuenow="<?php echo $_POST["id"] ?>" aria-valuemin="0" aria-valuemax="5"></div>
        </div>

        <form action="perguntas.php", method="post">
            <?php
                if($_POST["id"] == null){
                    carrega_pergunta($perguntas[0], $alternativas[0], 0);   
                }else if ($_POST["pergunta".$_POST["id"]] != "alt".$certas[$_POST["id"] - 1]){
                    perdeu();
                }else if ($_POST["id"] == 5){
                    ganhou();
                }else{
                    carrega_pergunta($perguntas[$_POST["id"]], $alternativas[$_POST["id"]], $_POST["id"]);
                }
                
            ?>  
        </form>
    </div>
    <?php include "Includes/footer.inc" ?>
</body>
</html>