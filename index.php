<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show do bilhão</title>

    <style>
        h1{
            color: pink;
            text-align: center;
        }
        h2{
            text-align: center;
        }
        .pergunta{
            margin-top: 5px;
        }
        form{
            width: 100%;
            text-align: center;
        }
        footer{
        background-color: pink;
        width: 100%;
        height: 50px;
        position: absolute;
        bottom: 0;
        left: 0;
        text-align: center;
        }
        
    </style>
</head>
<body>
    <?php include "menu.inc"; ?>

    <?php
    $id= $_GET["id"];
    ?>

    <?php include "perguntas.php"; ?>


    
    <?php include "rodape.inc"; ?>
</body>
</html>