<?php
    /*Inclusões*/
    
    include "Menu.inc";
    include "rodape.inc";
    include "perguntas.inc"

?> 

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Show do Bilhão - Perguntas</title>
    </head>

    <?php 
        echo(getMenu());

        $id = $_GET["id"];
        $id = $id - 1;
        echo(getPergunta($id));
        echo(getRodape());

    ?>

</html>