<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show do Bilhao</title>
    <?php require "perguntas.php"; ?>
</head>
<body>
    <?php 
        for($i = 0; $i < nPerguntas; $i++){
            echo "$perguntas[$i] <br><br>";
            for($j = 0; $j < 4; $j++){
                echo $alternativas[$i][$j]."<br>";
            }
            echo "<br>Resposta Correta: ".$alternativas[$i][$respostas[$i]]."<br><br>";
        }
    ?>
</body>
</html>