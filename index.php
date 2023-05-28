<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show do Bilhão</title>
    <style>
        *{
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
    </style>
</head>
<body>
    <?php include "menu.inc";?>
    <?php 
    $enunciados=array("Qual bicho transmite a Doença de Chagas?", "Qual fruto é no Norte e Nordeste conhecido como jerimum?", "Qual é o coletivo de cães?", "Qual pe o triângulo que tem todos os lados diferentes?", "Quem compôs o hino da independência?");
    $alternativas = array(array("abelha", "barata", "pulga", "barbeiro"), array("caju", "abobora", "chuchu", "côco"), array("matilha", "rebanho", "alcateia", "manada"), array("equilátero", "isósceles", "escaleno", "trapézio"), array("Dom Pedro I.", "Manuel Bandeira", "Castro Alves", "Carlos Gomes"));
    $alternativasCorretas = array(3, 1, 0, 2, 0);
    for($i=0;$i<5;$i++){
        echo "<h2>$enunciados[$i]</h2>";
        for($j=0;$j<4;$j++){
            echo $alternativas[$i][$j]; 
            echo "<br>"; 
        }
    }

    echo "GABARITO <br>";
    for($i=0;$i<5;$i++){
        echo "Questão $i: ";
        echo $alternativas[$i][$alternativasCorretas[$i]];
        echo "<br>";
    }
?>
</body>
</html>