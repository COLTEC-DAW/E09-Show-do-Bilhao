<?php
  include "perguntas.inc";
?>

<!DOCTYPE html>
<html>
    <head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Bem vindo ao Show do Bilhão</title>
    </head>

    <body>

    <div id = "Rotulo">
            <h3> Responda as 5 perguntas corretamente para ganhar o show e desfrutar da vida de Burgues Safado:</h3>
    </div>

        <?php include "menu.inc";?>

        <div class="container">
            <?php 
                if(empty($_GET)){
                    $_GET['id'] = 0;
                }
                PegarPerguntaIndividual($_GET['id']);
            ?>
        </div>
   
    </body>

    <?php include "rodape.inc";?>

</html>