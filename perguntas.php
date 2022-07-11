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
            $menu = "partials/menu.inc";
            $footer = "partials/rodape.inc";
            $questions = "partials/perguntas.inc";
        ?>
        <?php
            if (is_readable($menu)) include $menu; 
        ?>
        <?php
            if (is_readable($questions)) require $questions;
            else echo "Não foi possível carregar as perguntas.";

            if ((isset($_GET["id"])) && ((intval($_GET["id"])) <= count($GLOBALS["questions"])) && (intval($_GET["id"])) >= 0) carregaPergunta(intval($_GET["id"]));
            else echo "ID inválido";
        ?>
        <?php
            if (is_readable($footer)) include $footer;
        ?>
    </body> 
</html>
