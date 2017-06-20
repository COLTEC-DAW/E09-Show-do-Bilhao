<?php
session_start();
include "menu.inc";
require "mostraPergunta.inc";
$num = $_GET["num"];
?>        
<!Doctype>
<html>
    <head>
        <title>Show do Bilhão: <?= $num ?> </title>
    </head>
    <body>
        <?php
        $arquivo = fopen("perguntas.json", 'r');
        $texto = "";
        while (!feof($arquivo)) $texto .= fgets($arquivo);
        $json = json_decode($texto);
        mostraPergunta($num, $json);
        include "rodape.inc"; ?>
    </body>
</html>