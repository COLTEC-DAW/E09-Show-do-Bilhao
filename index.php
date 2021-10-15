<?php
        if (session_status() == PHP_SESSION_NONE){
                session_start();
        } 
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <title>Show do Bilhão</title>
</head>

<body>
    <?php
        include "./menu.inc";
    ?> 

    <div>
        <?php
            if (isset($_COOKIE["pontuacao" . $_SESSION["usuario"]]) && isset($_COOKIE["ultimoJogo" . $_SESSION["usuario"]])) { ?>
                <h2 style='color: #fc4518; font-size: 18px'>Último acesso: <?= $_COOKIE["ultimoJogo" . $_SESSION["usuario"]] ?></h2>
                <h2 style='color: #fc4518; font-size: 18px'>Última pontuação: <?= $_COOKIE["pontuacao" . $_SESSION["usuario"]] ?></h2>
        <?php } ?>
        
        <h1 style="color: #6E7076">Responda 5 perguntas corre e concorra a 1 bilhão de reais!</h1>
        <a href="./perguntas.php?id=0" style="background-color: #fc4518; color: white; font-size: 30px">Começar</a>
        
        <?php 

            echo("</br> </br> </br> </br> </br> </br> </br> </br>");
            echo("<a href='inicio.php?logout'>
                <button style='background-color: #fc4518; border-color: #fc4518; color: white; font-size: 20px'> Sair </button>
                </a>")

        ?>
    </div>

    <?php
        include "./rodape.inc";
    ?>  
    
</body>
</html>
