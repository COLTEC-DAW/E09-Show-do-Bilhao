<?php
  include '../Inc/perguntas.inc';
?>

<!DOCTYPE html >
<html>
    <head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Bem vindo ao Show do Bilhão</title>
    </head>

    <body>

        <?php include "../Inc/menu.inc";?>

        <div class="container">
            <?php echo MostrarTodasQuestoes() ?>
        </div>
   
    </body>

    <?php include '../Inc/rodape.inc';?>

</html>