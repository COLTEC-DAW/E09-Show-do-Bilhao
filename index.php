<!-- Importações -->
<?php require "PerguntaMaker.inc"; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show do Bilhão</title>
</head>
<body>
    <?php
        $game = new PerguntaMaker();
        $count = 1;

        foreach($game->perguntas as $pergunta) {
            echo "<h2>Questão $count</h2>";
            echo "<p>$pergunta->enunciado</p>";
            
            foreach($pergunta->alternativas as $alternativa){
                echo "<p>$alternativa->letra) $alternativa->resposta</p>";
            }

            $count++;
        }
    ?>
</body>
</html>