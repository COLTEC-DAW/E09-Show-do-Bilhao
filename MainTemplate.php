<?php
  include "perguntas.inc";
?>

<!DOCTYPE html >
<html>
    <head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Bem vindo ao Show do Bilhão</title>
    </head>

    <body>

        <?php include "menu.inc";?>

        <div class="container">
            <?php echo MostrarTodasQuestoes() ?>
        </div>
   
    </body>

    <?php include "rodape.inc";?>

</html>