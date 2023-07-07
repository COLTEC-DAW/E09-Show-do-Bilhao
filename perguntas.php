<?php
session_start(); ?>

<?php  
    
    
?>


<!DOCTYPE html>
<html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" ient="IE=edge">
    <meta name="viewport" ient="width=device-width, initial-scale=1.0">
    <title>Show do Bilhão</title>
</head>

<body>
    <h1>Show do Bilhao</h1>

    <div>

        <?php

        

        if (!isset($_SESSION['Usuarios'])) {
           header("Location: index.php");
           
        }

        require "questao.php";
        
        if (empty($_GET)) {
            carregaPergunta($_GET = 0);
        }
        else {
            carregaPergunta($_GET['id']);
        }

        $progresso = $_GET['id'];
        echo "Numero de acertos: $progresso";

        ?>
    </div>

    <?php

        include "rodape.inc";

        if(isset($_COOKIE["nome"]) && isset($_COOKIE["pontos"])){
            echo "Ultimo Jogador: " . $_COOKIE["nome"] . " Pontos Ultimo Jogador: " . $_COOKIE["pontos"]; 
        }
    ?>
</body>

</html>