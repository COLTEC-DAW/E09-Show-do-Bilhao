<?php
    session_start();
    require "./src/Controllers/homeController.inc";
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show do Bilhão</title>
</head>
<body>
    <?php include "./templates/header.inc" ?>
    
    <?php
        loadScreen();
    ?>
    
    <?php include "./templates/footer.inc" ?>
</body>
</html>