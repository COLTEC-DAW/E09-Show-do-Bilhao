<?php
        $id = $_GET["id"];
        $id = ($id+1) * 200000; 
        $data =date("d.m.y"); 
        setcookie("data", $data);
        setcookie("pontos", $id);
        echo "FINAL DO JOGO BITCHES";

?>

<html>
    <head>
    </head>
    <body>
        <br>
        <a href="historico.php">Ver histórico</a>
    </body>
</html>