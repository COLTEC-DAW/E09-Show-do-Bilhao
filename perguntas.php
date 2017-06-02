<!Doctype>
<html>
    <head>
        <title>Show do Bilhão: <?php $num ?> </title>
    </head>
    <body>
        <?php
        require "perguntas.inc";
        $num= $_GET["num"];
        carregaPergunta($num);
        ?>
    </body>
</html>