<?php
  session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Bye</title>
</head>
<body>
    <?php
    date_default_timezone_set('America/Sao_Paulo');
    setcookie($_SESSION["login"], 'Último acesso:' . date('d/m/Y H:i:s', time()) . '<br>Progresso:' . $_SESSION["progess"] ."%");
    include "Includes/menu.inc" ?>
    <h2 class="text-center">Volte sempre</h2>
    <p>Clique em "Show do Bilhão" para jogar de novo</p>
    <?php 
    session_destroy();
    include "Includes/footer.inc" ?>
</body>
</html>
