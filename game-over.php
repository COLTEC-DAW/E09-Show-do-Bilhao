<?php session_start(); ?>

<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=VT323&display=swap">
    <link rel="stylesheet" href="assets/css/menu.css">
    <link rel="stylesheet" href="assets/css/game-over.css">
    <link rel="stylesheet" href="assets/css/rodape.css">
    <title>Show do Bilhão</title>
</head>

<body>
    <!-- Cabeçalho -->
    <div class="header">
        <h1><a href="index.php">Show do Bilhão</a></h1>
        <?php require_once "partials/menu.inc"; ?>
    </div>

    <!-- Perguntas -->
    <h2>Game Over</h2>
    <p>Mermão, voce perdeu seu merda. Seu lixo humano. Vai comer uma vaca.</p>
    <a href="/perguntas.php" class="reset-button">Resetar</a>

    <?php require_once "partials/rodape.inc"; ?>
</body>

</html>