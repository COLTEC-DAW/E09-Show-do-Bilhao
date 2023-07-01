<?php
    session_start();
    include "header.inc";
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
</head>

<body>
    <?php
    //requires


    if (!isset($_SESSION['user'])) {
        rightForm();
    }

    if (isset($_SESSION['user'])) {
        //$cookieValue = [];
        $cookieValue = UnpackCookie();
        echo "Você esta logado!!!</br>";
        echo "Ultima vez logado foi:" . $cookieValue[1];
        //echo "Sua ultima pontuação foi:" . $cookieValue[0] . "</br>";
        echo "<a href='index.php'>Iniciar questionario</a>";
    }
    ?>
</body>

</html>