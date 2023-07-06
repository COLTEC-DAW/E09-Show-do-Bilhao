<?php session_start();
setcookie($_SESSION['user'] . "-max", 5); ?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Show do Pilão</title>
        <link rel="stylesheet" href="Style/style.css">
    </head>

    <body>
        <div>
            <?php include("Partials/menu.inc");?><br>            
            <p>Não, você não vai receber o parabéns, até porque você é LITERALMENTE e NÃO IRONICAMENTE assim:</p>
            <img src="nerd.jpg">
            <div>
                <a href="pergunta.php">Restart</a>
            </div>
            <?php include("Partials/rodape.inc");?>            
        </div>
    </body>
</html>
