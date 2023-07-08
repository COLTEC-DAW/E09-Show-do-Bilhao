<?php
session_start();

$pontuacao = isset($_COOKIE['pontuacao']) ? $_COOKIE['pontuacao'] : 0;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css" />
    <title>Game Over</title>
</head>
<body>
<div class="central">
    <h2>Game Over!</h2> 
    <p>Pontuação: <?= $pontuacao ?></p> 
    <p>Você perdeu!!</p>
</div>
</body>
</html>
