<!DOCTYPE html>
<html>
    <head>
        <title>$HOW DO BIÃO</title>
    </head>
    <body>
        <h1>Bem vindo à prova conceito do Show do Bilhão</h1>
        <?php
            require "perguntas.inc";

            for($i = 0; $i<20; $i++){
                carregaPerguntaConceito($i);
                echo nl2br("\n");
            }
        ?>
    </body>
</html>