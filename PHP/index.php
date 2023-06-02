<?php

    $login = $_GET['login'];
    $pswd = $_GET['pswd'];

    $questions = array("Qual o antigo nome do lendário grupo vencedor local da OIMSF?",
                        "Qual o verdadeiro nome de vulgo Smola?",
                        "Uma vez fui cozinhar um ovo e tinha um pintinho nele, imagina se eu cozinho com meu pinto dentro?",
                        "Em quanto tempo Leonardo fez a prova da OBMEP de 2023?",
                        "Em que década os casos da rua Arvoredo começaram?");

    $options = array(array("Mazemática", "Calculopsitas", "Pi em tudo", "Somas Turbo", "Euler"),
                    array("João", "Gustavo", "Samuel", "Francisco", "Lorraine"),
                    array("Seria tenebroso", "OUA", "Ai pai para", "La ele", "WHAT THE HEEEEEELL!"),
                    array("32.5\"", "5'", "40'", "1h e 30'", "Dois dias inteiros no horário de Brasília"),
                    array("354", "1860", "60 do século XIX", "Fic", "1939-1945"));

    $answers = array("D", "A", "D", "B", "C");
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Show do Pilão</title>
        <link rel="stylesheet" href="../Style/style.css">
    </head>

    <body>
        <?php include("../Partials/menu.inc");?>
        <?php include("../Partials/perguntas.inc");?>
        <?php include("../Partials/rodape.inc");?>
    </body>
</html>