<?php

$perguntas = array(
    "Qual o nome do melhor canal da Angola ?",
    "Qual a religião do Sergio ?",
    "Qual minha banda favorita ?",
    "Qual meu professor favorito no coltec ?"
);

$alternativas =  array(
    array("Gabriel Mine", "Rei do Kuduro", "Vsauce", "Buzlaitir"),
    array("Umbanda", "Satanismo", "Evangelicalismo", "Cristianismo"),
    array("Black Sabbath", "Death", "Bee Gees", "Gordão do Pc"),
    array("Talin", "Jemaf", "ZéDu", "LEANDRO MAIA")
);

$respostas = [2,3,1,4];
$indices = ["A: ", "B: ", "C: ", "D: "];

function mostra_perguntas(){
    global $perguntas, $alternativas, $respostas, $indices;
    for($i = 0;$i< count($perguntas);$i++){
        echo ($i + 1) . " $perguntas[$i]\n\n";

        for($j = 0;$j<count($alternativas[$i]);$j++){
            if(($j + 1) == $respostas[$i]){
                echo  "Correta: " . $indices[$j] . $alternativas[$i][$j] . "\n";
            }else{
            echo  $indices[$j] . $alternativas[$i][$j] . "\n";
            }
        }
        echo "\n";
    }
}



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show do Bilhao!!</title>
</head>
<body>
    <div>
        <h1>Show do Bilhao!!</h1>
        <p>
            <?php
                mostra_perguntas();
            ?>
        </p>
    </div>
    
</body>
</html>
    