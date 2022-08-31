<?php
        $perguntas = [
            "Quantos Grammy's tem a banda paramore?",
            "Quantos Grammy's tem a multipremiada e conceituada artista Melanie Martinez?",
            "Cabelo loiro é sinômimo do que na cultura popular?",
            "Olhos verdes indicam possíveis problemas:",
            "Qual a principal cidade do subúrbio subdesenvolvido de Belo Horizonte?"
        ];
        $respostas = array(
            array("0", "1", "10", "Não foram indicados"),
            array("10", "0", "13", "Além de seus vários Grammy's, Melanie Martinez também possui em sua estante um Oscar, um Tonny e um Emmy, classificando-a como uma artista que possui um EGOT"),
            array("Inteligência", "Bom gosto", "Felicidade", "Burrice"),
            array("Mentais", "Oftalmológicos", "Cognitivos", "Dermatológicos"),
            array("Gotham City", "Raposos", "Contagem", "Venda Nova")
        );

         $respostascorretas = [3, 3, 3, 1, 2];
         $keys = array_keys($respostas);

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width-device-width, incial-scale=1.0">
        <title>Show do Bilhão</title>
    </head>
    <body>
        <h1>Olá, jogadores!!!</h1>
        <p>
         <?php

             foreach ($perguntas as $chave => $enunciado) {
                echo "<li>";
                    echo "<strong>{$enunciado}</strong>";
                    echo "<ol type = 'A'>";
                        foreach ($respostas[$keys[$chave]] as $alternativa) {
                            echo "<li>$alternativa</li>";
                        }
                    echo "</ol>";
                echo "</li>";
            }

         ?>
        </p>


<input type="submit" value="Ver resultado">
    </body>
</html>