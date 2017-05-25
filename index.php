<!DOCTYPE html>
<html lang>
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
    </head>
    <body>
        <h1>Bem vindo ao $how do Bilhão</h1>
        <?php
            $perguntas = array("Como se chama o lago salgado, que é parte mais baixa da Terra, situado na Palestina?", "Qual o continente que tem mais países?", "A planície da Manchúria encontra-se em qual país?", "Na fronteira de quais países está o Everest, pico mais alto do mundo?", "O abacaxi é originário de que país?");
            $alternativas = array(
                                array("Mar Morto", "Mar Cáspio", "Mar Mediterrâneo", "Mar do Caribe"),
                                array("Europa", "África", "Ásia", "América"),
                                array("China", "Mongólia", "Irã", "Angola"),
                                array("Suíça e Itália", "Nepal e China", "Chile e Argentina", "Brasil e Uruguai"),
                                array("Estados Unidos", "Brasil", "Colômbia", "Venezuela")
                            );
            $respostas = array(0, 1, 0, 1, 1);
            $alt = array("a)", "b)", "c)", "d)");
            for($i = 0; $i < 5; $i++){
                echo $i+1;
                echo ") $perguntas[$i]<br>";
                $alter = $alternativas[$i];
                for($j = 0; $j < 4; $j++){
                        echo "$alt[$j] $alter[$j]<br>";
                }
                echo "<br>";
            }
        ?>
    </body>
</html>