<?php

    $login = htmlspecialchars($_POST['login']);
    $pswd = htmlspecialchars($_POST['pswd']);
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>SHOW DO PILÃO</title>
        <link rel="stylesheet" href="../Style/style.css">
    </head>

    <body>
        <?php include("../Partials/menu.inc");?>
        <?php include("../Partials/perguntas.inc");?>
        <?php include("../Partials/rodape.inc");?>
    </body>
</html>