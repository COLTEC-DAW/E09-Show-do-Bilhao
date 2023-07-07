<?php
    //Inicia a sessão, requires e includes
    session_start();
    require "user.inc";
    require "loginFunctions.inc";
    include "rodape.inc"
    
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

    //Se a sessão não estiver setado, imprime a tela de login
    if (!isset($_SESSION['user'])) {
        rightForm();
    }
    
    include "menu.inc";// o include do menu esta aqui para evitar bugs, onde ele não carrega
    
    //Se a sessão estiver setada, mostra na tela a ultima pontuação, ultima vez logado e a opção de iniciar o questionario
    if (isset($_SESSION['user'])) {
        $cookieValue = UnpackCookie();
        echo "Você esta logado!!!</br>";
        echo "Sua ultima pontuação foi:" . $cookieValue[0] . "</br>";
        echo "Ultima vez logado foi:" . $cookieValue[1] . "</br>";
        echo "<a href='index.php'>Iniciar questionario</a>";
    }
    
    ?>
</body>

</html>