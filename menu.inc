<?php 
    $user = unserialize($_SESSION['user']);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show do Bilhão</title>
</head>
<body>
    <label>
        <h1> Show do Bilão </h1>
        <p> Seja bem vindo ao <strong><br>Show do Bilhão do PrateEnlouquecer</strong>! </p>    
        <p>Ultima vez que você veio aqui jogar jogin: <?= $_COOKIE[$user->login."-lastTimePlayed"]?></p>
        <p> Olha o quão ruim você era na ultima vez que jogou, você acertou <?= $_COOKIE[$user->login."-lastPoints"]?></p>
    </label>
</body>
</html>