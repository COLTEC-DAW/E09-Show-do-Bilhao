<?php
ob_start();
session_start();
require "perguntas.inc";
include "menu.inc";
$num= $_GET["num"];
?>
<!Doctype>
<html>
    <head>
        <title>Show do Bilhão: <?php $num+1 ?> </title>
    </head>
    <body>
        <?php
        carregaPergunta($num);
        include "rodape.inc";
        ?>
    </body>
</html>