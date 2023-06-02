 <!DOCTYPE html>
    <html>
    <link rel="stylesheet" href="style.css">

        <body>
            <?php
                require('pergunta.inc');
                require('definirPerguntas.inc');

                carregaPergunta($perguntas, intval($_GET["id"]));
            ?>
    </body>
</html>