<?php
$perguntasJson = file_get_contents("perguntas.json");
$conteudoPerguntasJson = json_decode($perguntasJson);

$vetorEnunciados = 
["Qual bicho transmite Doença de Chagas ?",
"Qual fruto é conhecido no Norte e Nordeste como jerimum?",
"Qual é o coletivo de cães?",
"Qual é o triângulo que tem todos os lados diferentes?",
"O adjetivo venoso está relacionado a:"];
$vetorAlternativas =array(

array(
"Abelha",
"Barata",
"Pulga",
"Barbeiro"),

array(
"Caju",
"Abóbora",
"Chuchu",
"Côco"),

array(
"Matilha",
"Rebanho",
"Alcateia",
"Manada"),

array(
"Equilátero",
"Isóceles",
"Escaleno",
"Trapézio"),

array(
"Vela",
"Vento",
"Vênia",
"Veia"));

//$vetorIndiceAlternativas = array(0,1,2,3);

$vetorAlternativasCorretas = array(3,1,0,2,3);
/*
$matrizAlternativas = array(
    $vetorEnunciados,
    $vetorAlternativas
);
*/
/*
for($contadorI = 0; $contadorI < 3; $contadorI ++){
    for($contadorJ = 0; $contadorJ< 3; $contadorJ++){
        echo ($matrizAlternativas[$contadorI][$contadorJ]);
        echo "<br>";
    }
};
*/
function printaVetor($vetorAlvo, $id){
    for ($i = 0; $i <4; $i++){
        
        echo "<button>";
        echo ($vetorAlvo[$id][$i]);
        echo "<br>";
    }
}
function carregaPerguntaPeloId($id){
    $id = $_GET["id"];
    global $vetorEnunciados;
    global $vetorAlternativas;
    echo ($vetorEnunciados[$id]);
    echo "<br>";
    echo "<br>";
    printaVetor($vetorAlternativas, $id);
}
carregaPerguntaPeloId($id);

echo $conteudoPerguntasJson->enunciado1;

?>







<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>