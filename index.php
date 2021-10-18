<?php
    $perguntas = array ("qual o melhor filme",
    "qual foi o momento mais engracado na historia da humanidade",
    "qual a opcao correta",
    "Como pode a energia de um fóton ser dada por E = hf, quando a simples presença da freqüência f indica que a luz é uma onda?",
    "complete a letra da musica: Never gonna...");

    $alternativas = array (array ("A) velozes e furioso 9","B) quentin tarantino","C) vingadores ultimato 2","D) scooby doo que eles vao pra ilha la"),
        array("A) quando o cara se transformou num picles","B) quando pedro h. dutra duraes contou uma piada (dica: nao e esse)","C) quer ouvir outra piada murray?","D) rico vs pobre winderson nunes"),
        array("A) essa aqui","B) a de cima","C)a primeira","D) ir para a proxima pergunta"),
        array("A) 8,6 x 1018 Hz","B) tântalo (4,2 eV), tungstênio (4,5 eV), alumínio (4,08 eV)","C) albert einstein escrevendo a biblia","D) 2,11 eV"),
        array("A) give you up","B) let you down","C) run around and desert you","D) todas as alternativas"),
        );

    $altCorretas[] = array ("D","A","D","C","D");

    function imprimindoPerguntasERespostas()
    {
        global $perguntas, $alternativas, $altCorretas;

        for ($i = 0; $i < count($perguntas); $i++) 
        {
            echo ($i + 1) . " - $perguntas[$i]<br>";
            for ($j = 0; $j < count($alternativas)-1; $j++) 
            {
                echo $alternativas[$i][$j] . "<br>";
            }
            echo "<br>";
        }
    }
?>

<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Show do Bilhão</title>
</head>
<body>
    <p>
        <?php imprimindoPerguntasERespostas() ?>;
    </p>
</body>
</html>