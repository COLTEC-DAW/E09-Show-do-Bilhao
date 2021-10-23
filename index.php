<?php
    $perguntas = 
    [
        "SEGUNDO O DITADO POPULAR: DEUS AJUDA...",
        "UMA NOVENA CORRESPONDE A QUANTOS DIAS?!",
        "O 'SUSHI' E O 'SASHIMI' SÃO COMIDAS TIPICAS DE QUAL PAÍS?"
    ];
    $alternativas = 
    [
        [
            "A) A QUEM MENOS SE ESPERA",
            "B) A QUEM CEDO MADRUGA", 
            "C) A QUEM REZA MUITO"
        ],

        [
            "A) 90",
            "B) 900",
            "C) 9"
        ],

        [
            "A) CHINA",
            "B) VIETNAM",
            "C) JAPAO"
        ],
    ];
    $altCorret = [1, 0, 1, 1, 2];
 
    function carregaPerguntas()
    {
        global $perguntas, $alternativas, $altCorret;
        for ($i = 0; $i < count($perguntas); $i++) {
            echo ($i + 1) . " pergunta: $perguntas[$i]<br><br>";
            for ($j = 0; $j < count($alternativas); $j++) {
                if ($j == $altCorret[$i]) {
                    echo "<strong>".$alternativas[$i][$j]."</strong><br>";
                }
                else{
                    echo $alternativas[$i][$j]."<br>";
                }
            }
            echo "<br>";
        }
    }

?>

<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Show do bilhao</title>
    </head>
    <body>
        <h1>Show do bilhao</h1>
        <div>
            <?php carregaPerguntas();?>
        </div>
    </body>
</html> 