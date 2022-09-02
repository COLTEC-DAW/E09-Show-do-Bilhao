<?php
        $perguntas = [
        "As árvores que não perdem suas folhas no outono, são também chamadas de:",
        "Qual desses ingredientes não é usado no preparo do pavê?",
        "O que é um Cartoon",
        "Quem nasce no Estado do Rio de Janeiro é:" ];
        $respostas = array(
         array("Viçosas","Floridas","Sempre-Verdes","Nativas"),
         array("Bolacha", "Manteiga", "Gemas", "Pimenta"),
         array("Desenho Animado", "Livro Antigo", "Livro de Receitas", "Carta Geográfica"),
         array("Fluminense", "Paulistano", "Sergipano", "Gaúcho"));

         $respostascorretas = [2,3,0,0];
         $keys = array_keys($respostas);

// oi wanessa, casada???
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
