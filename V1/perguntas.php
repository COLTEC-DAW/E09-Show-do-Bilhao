<!Doctype>
<html>
    <head>
        <title>Show do Bilhão: <?php $num ?> </title>
    </head>
    <body>
        <?php
        require "perguntas.inc";
        include "menu.inc";
        $num= $_GET["num"];
        carregaPergunta($num);
        include "rodape.inc";
        ?>
    </body>
</html>