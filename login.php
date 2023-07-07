<?php
    session_start();
    require "user.inc";
    require "loginFunctions.inc";
    
    
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show do Bilhão</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php
    //requires


    if (!isset($_SESSION['user'])) {
        rightForm();
    }
    include "menu.inc";
    if (isset($_SESSION['user'])) {
        $cookieValue = UnpackCookie();
        echo "Você esta logado!!!</br>";
        echo "Sua ultima pontuação foi:" . $cookieValue[0] . "</br>";
        echo "Ultima vez logado foi:" . $cookieValue[1] . "</br>";
        echo "<a href='index.php'>Iniciar questionario</a>";
    }
    require "rodape.inc"
    ?>
</body>

</html>