<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
    </head>
    <body>
        <?php
            include 'menu.inc';
            require 'functions.inc';
            $id_pergunta = $_GET["id"];
            carregaPergunta($id_pergunta);
            include 'rodape.inc';
        ?>
    </body>
</html>