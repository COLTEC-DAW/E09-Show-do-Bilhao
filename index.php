<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show do Milhão</title>
    <?php require "enunciado.php";?>
    <?php require "constantes.php"?>
</head>
<body>
    <?php 
        for($i = 0; $i < NUM_PERGUNTAS; $i++){
            echo "$perguntas[$i] <br>";
            for($j = 0; $j < NUM_ALTERNATIVAS; $j++){
                echo $alternativas[$i][$j]."<br>";
            }
            echo "<br>";
            echo " resposta: $respostas[$i] <br>";
            echo "<br>";
        }
    ?> 
</body>
</html>