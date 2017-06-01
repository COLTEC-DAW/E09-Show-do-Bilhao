<!Doctype>
<html>
    <?php $num= $_GET["id"] ?>
    <head>
        <title>Show do Bilhão: <?php $num ?> </title>
    </head>
    <body>
        <?php
        require "perguntas.inc";
        carregaPergunta($id);
        ?>
        
    </body>
</html>