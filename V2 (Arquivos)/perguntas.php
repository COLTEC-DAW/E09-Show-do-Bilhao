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
        $perguntas;
        $arquivo = fopen("perguntas.json", 'r');
        $texto = "";
        while (!feof($arquivo)) $texto .= fgets($arquivo);
        $json = json_decode($texto);
        for ($i=0; $i < count($json); $i++){
            $umaPergunta = new Pergunta($json[$i]->pergunta, $json[$i]->alternativas, $json[$i]->correta);
            array_push($perguntas, $umaPergunta);
        mostraPergunta($num, $perguntas);
        include "rodape.inc"; ?>
    </body>
</html>