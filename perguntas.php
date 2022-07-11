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

            if (is_readable($menu)) include $menu;
            if (is_readable($questions)) include $questions;
            else echo "<p>Não foi possível carregar as perguntas.</p>";

            if ((isset($_GET["id"])) && (($_GET["id"]) <= count($GLOBALS["questions"])) && ($_GET["id"]) >= 0) carregaPergunta($_GET["id"]);
            else echo "<p>ID inválido</p>";

            if (is_readable($footer)) include $footer;
        ?>
    </body> 
</html>