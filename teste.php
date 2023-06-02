<?php 
    $login = $_POST["login"];
    $senha = $_POST["senha"];
?>

<!DOCTYPE html> 
<html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>PHP</title>
    </head>
    <body>
        <h1>Pag Principal</h1>
        
        <p>Ola, <?= $login ?>. Sua senha será: <?= $senha ?>.</p>
        
    </body>
</html>