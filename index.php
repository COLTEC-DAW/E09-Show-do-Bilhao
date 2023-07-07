<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=VT323&display=swap">
    <link rel="stylesheet" href="assets/css/menu.css">
    <link rel="stylesheet" href="assets/css/index.css">
    <link rel="stylesheet" href="assets/css/rodape.css">
    <title>Show do Bilhão</title>
</head>

<body>
    <!-- Cabeçalho -->
    <div class="header">
        <h1><a href="index.php">Show do Bilhão</a></h1>
        <?php require_once "partials/menu.inc"; ?>
    </div>

    <?php
    if (isset($_SESSION['logado'])) {
        ?>
        <a href="perguntas.php" class="botao-jogar">JOGAR</a>
        <?php
    } else {
        echo "Se quiser jogar tem que logar, zé ruela.";
    }


    ?>
    <?php require_once "partials/rodape.inc"; ?>




</body>

</html>