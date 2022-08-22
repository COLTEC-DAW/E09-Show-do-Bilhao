<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate" />
    <meta http-equiv="Pragma" content="no-cache" />
    <meta http-equiv="Expires" content="0" />
    <link rel="stylesheet" href="style.css"/>
    <title>Show do Bilhão</title>
</head>
<body>
    <?php 
    include "partials/menu.inc";
    $enunciados = [
        "Qual bicho transmite Doença de Chagas?",
        "Qual fruto é conhecido no Norte e Nordeste como jerimum?",
        "Qual é o coletivo de cães?",
        "Qual é o triângulo que tem todos os lados diferentes?",
        "Quem compôs o Hino da Independência?"
    ];
    $alternativas = [
        ["Abelha","Barata","Pulga","Barbeiro"],
        ["Caju", "Abóbora", "Chuchu", "Coco"],
        ["Matilha", "Rebanho", "Alcateia", "Manada"],
        ["Equilátero", "Isóceles", "Escaleno", "Trapézio"],
        ["Dom Pedro I", "Manuel Bandeira", "Castro Alvez", "Carlos Gomes"]
    ];
    $respostas = [3,1,0,2,0];
    for($x = 0; $x < count($enunciados); $x++){
        echo '<div class="col8" id="perguntas">';
            echo "<h3> {$enunciados[$x]} </h3>";
            echo "<ol type='A'>";
                for($y = 0; $y < count($alternativas[$x]); $y++){
                    echo "<li>{$alternativas[$x][$y]} </li>";
                }
            echo "</ol>";
        echo "</div>";
    }
    echo "<style>#footer { position: absolute }</style>"; 
    include "partials/rodape.inc";
    ?>
</body>
</html>