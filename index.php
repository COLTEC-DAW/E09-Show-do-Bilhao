 <!DOCTYPE html>
    <html>
    <link rel="stylesheet" href="style.css">

    <body>
        <?php
            require('pergunta.inc.php');
            require('definirPerguntas.inc.php');

            carregaPergunta($perguntas, intval($_GET["id"]));
        ?>
    </body>
</html>