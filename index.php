<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Show do Bilhão</title>
    </head>
    <body>
        <?php
        $id = $_GET["id"];
        ?>
        <?php include "menu.inc"; ?>
        <?php require "perguntas.inc" ?>
        <div class="col-10">
            <?php  carregaPerguntas($id)?>
        </div>
        <?php include "rodape.inc"; ?>
    </body>
</html>
