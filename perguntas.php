<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show do Bilhão</title>
</head>
<body>
    <div>
        <?php include "menu.inc"; ?>
    </div>

    <div>
        <?php 
            require "perguntas.inc"; 
            if(empty($_GET["id"]))
            {
                echo "Início de Jogo, nenhuma pergunta respondida até o momento.<br><br>";
                echo "Jogador(a): ". $_SESSION["user"];
                echo "<br>";
                carregaPergunta(0); 
            }
            else
            {
                echo $_GET["id"]."/5 Respostas Corretas.<br><br>"; 
                echo "Jogador(a): ". $_SESSION["user"];
                echo "<br>";
                carregaPergunta($_GET["id"]); 
            }
        ?>
    </div>

    <div>
        <?php include "rodape.inc"; ?>
    </div>
    
</body>
</html>