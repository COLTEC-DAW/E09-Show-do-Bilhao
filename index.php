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
    <a href="http://localhost:8000/perguntas.php?id=0">Vamos começar? -></a>


    <?php 
    /*for($i=0;$i<5;$i++){
        echo "<h2>$enunciados[$i]</h2>";
        for($j=0;$j<4;$j++){
            $alternativaGeral= $alternativas[$i][$j];
            echo "<p>$alternativaGeral</p>"; 
        }
    }

    echo "<h3>GABARITO</h3>";
    for($i=0;$i<5;$i++){
        $alternativaCorreta=$alternativas[$i][$alternativasCorretas[$i]];
        echo "<p>Questão $i: $alternativaCorreta</p>";
    }*/
    ?>
    <?php include "rodape.inc";?>
</body>
</html>