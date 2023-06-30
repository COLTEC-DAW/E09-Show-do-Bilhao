<?php 
    require "perguntas.inc";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show do Bilhão</title>
</head>
<body>
    <?php
        foreach ($enunciados as $key => $elemento) {
            $num = $key + 1;
            echo "<h2> Questão $num </h2>";
            echo "<p>$elemento</p>";
            for ($i=0; $i < 4; $i++) { 
                echo $alternativas[$key][$i];
                echo "<br>";
            }
            echo "<br>";
        }
       
    ?>
</body>
</html>