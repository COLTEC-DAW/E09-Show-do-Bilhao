<!Doctype>
<html>
    <head>
        <title>Show do Bilhão: <?php $num ?> </title>
    </head>
    <body>
        <?php
        include "menu.inc";
        require "mostraPergunta.inc"
        $num= $_GET["num"];
        $arquivo = fopen("perguntas.json", 'r');
        $texto = "";
        while (!feof($arquivo)) $texto .= fgets($arquivo);
        $json = json_decode($texto);
        mostraPergunta($num, $json);
        include "rodape.inc"; ?>
    </body>
</html>