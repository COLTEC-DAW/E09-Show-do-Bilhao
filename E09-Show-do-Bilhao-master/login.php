<?php
    session_start();
    require "./src/Controllers/loginController.inc";
    require "./src/Common/Functions.inc";
    validateLogin();
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Press+Start+2P&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="./assets/reset.css">
    <link rel="stylesheet" href="./assets/styles.css">
    
    <title>Show do Bilhão</title>
</head>
<body>
    <?php include "./templates/header.inc" ?>
    
    <?php
        if(isset($_POST['warning'])){
            include "./templates/warningTemplate.inc";
        }

        if(!isset($_SESSION['user'])){
            loadRightForm();
        }
    ?>
    
    <?php include "./templates/footer.inc" ?>
</body>
</html>