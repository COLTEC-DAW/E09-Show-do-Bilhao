<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show do Bilhão</title>
    <link rel="stylesheet" href="Styles/styles.css">
</head>
<body>
    <?php 
    session_start();
    session_start();
    if(isset($_SESSION['user'])){
        include "Componentes/menu.inc";
        include "Componentes/rodape.inc";
    }else{
        require "Componentes/login.inc";
        //require "../index.php";
    }
    /*if(isset($_SESSION['user'])){
        require "Pages/PaginaInicial.php";
    }else{
    }*/
    ?>
  
</body>
</html>