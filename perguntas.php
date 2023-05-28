<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pergunta</title>
    <style>
        *{
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; 
        }
    </style>
</head>
<body>
    <?php require "perguntas.inc";?>
    <?php 
        $id=$_GET["id"];
        echo "<h1>Pergunta $id </h1>";
        $id = $id-1;
        $pergunta=carregaPerguntas($id);
        echo "<h2>$pergunta->enunciado</h2>";
        for($i=0;$i<4;$i++){
            $alternativa = $pergunta->alternativas[$i];
            echo "<p>$alternativa</p>";
        }
        echo "GABARITO: $pergunta->indiceAlternativaCorreta";
    ?>
</body>
</html>