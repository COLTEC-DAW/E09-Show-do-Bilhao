<?php

$perguntas = array(
    "Quem pintou o quadro Mona Lisa?",
    "Quem é o autor da série literária Sítio do Picapau Amarelo?",
    "Qual fruta envenenada comeu a Branca de Neve?",
    "Qual artista é conhecido como o Rei do Pop?"
);
$respostas = array(
    array(
        "a) Leonardo DiCaprio",
        "b) Leonardo da Vinci",
        "c) Van Gogh",
        "d) Tarsila do Amaral"
    ),
    array(
        "a) Walcyr Carrasco",
        "b) Neil Gaiman",
        "c) Monteiro Lobato",
        "d) Clarice Lispector"
    ),
    array(
        "a) Uva",
        "b) Banana",
        "c) Maçã",
        "d) Morango"
    ),
    array(
        "a) Michael Jackson",
        "b) Olivia Rodrigo",
        "c) Bruno Mars",
        "d) Matuê"
    )
);
$respostas_certas = array(
    1, 2, 2, 0
);

function mostra_perguntas()
{
    global $perguntas, $respostas, $respostas_certas;
    for ($i = 0; $i < count($perguntas); $i++) {
        echo "<h3>" . ($i + 1) . ". $perguntas[$i]</h3>";
        for ($j = 0; $j < count($respostas); $j++) {
            if ($j == $respostas_certas[$i]) {
                $respostas[$i][$j] = "<b>" . $respostas[$i][$j] . "</b>";
            }
            echo "&nbsp&nbsp" . $respostas[$i][$j] . "<br>";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show do Bilhão</title>
</head>

<body class="container">
    <div class="col_12">
        <h1>Show do Bilhão</h1>
    </div>
    <div class="col_12">
        <h2>Perguntas:</h2>
        <div class="perguntas">
            <?php
            mostra_perguntas();
            ?>
        </div>
    </div>
</body>

</html>