<!--/**
* @file   Index.php
* @brief  Arquivo com a implementação da pagina do "Show do Bilhão"
* @author Bruna Pérez
* @date   2021-10-04
*/ -->
<?php

    include "PerguntasDados.inc";
    include "Menu.inc";
    include "Perguntas.inc";
    include "Rodape.inc";

?>

<!DOCTYPE html>
    <html lang="pt-br">
        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Show do Bilhão</title>
        </head>
        <body>
           

            <?php echo GetMenu() . "<br>"?>
            <?php echo carregaPergunta($_GET["id"]) . "<br>"?>
            <?php echo "<br>". GetRodape() ?>
        </body>
</html> 