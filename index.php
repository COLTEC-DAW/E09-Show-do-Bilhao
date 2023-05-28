<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show do Bilhão</title>
</head>
<body>
<?php 
    $enunciados=array("Qual bicho transmite a Doença de Chagas?", "Qual fruto é no Norte e Nordeste conhecido como jerimum?", "Qual é o coletivo de cães?", "Qual pe o triângulo que tem todos os lados diferentes?", "Quem compôs o hino da independência?");
    for($i=0;$i<5;$i++){
        echo "$enunciados[$i] <br>";
    }
?>
</body>
</html>