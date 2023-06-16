<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show do bilhão</title>
    <link rel="stylesheet" href="./css/reset.css">
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
    <?php include "menu.inc"; ?>

    <?php
    if(count($_GET)==0){
        $id=1;
    } else{
        $id= $_GET["id"];
    }
    ?>

    <?php
        include "perguntas.inc";
        carregaPergunta($id);
    ?>

    <?php 
        
    ?>


    <?php include "rodape.inc"; ?>
</body>
</html>