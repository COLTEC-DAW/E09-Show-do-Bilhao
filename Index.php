<!--/**
* @file   Index.php
* @brief  Arquivo com a implementação da pagina do "Show do Bilhão"
* @author Bruna Pérez
* @date   2021-10-04
*/ -->

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show do Bilhão</title>
    <?php require "Perguntas.php";?>
</head>

<body>
    <?php 
        for($i = 0; $i < 6; $i++){
            echo "$Enunciados[$i] <br>";
            for ($j = 0; $j < 4; $j++) {
                echo $Alternativas[$i][$j]. "<br>";
            }
            echo "<br>";
            echo "Resposta certa: $AlternativaCerta[$i] <br>";
            echo "<br>";
        }
    ?> 
</body>
</html> 