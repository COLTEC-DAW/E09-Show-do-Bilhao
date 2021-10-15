<?php

    $perguntas =  [ "Qual bicho transmite Doença de Chagas?",
                    "Qual fruto é conhecido no Norte e Nordeste como jerimum?",
                    "Qual é o coletivo de cães?",
                    "Qual é o triângulo que tem todos os lados diferentes?",
                    "Quem compôs o Hino da Independência?" 
                ];

    $respostas = [  ["Abelha","Barata","Pulga","Barbeiro"],
                    ["Caju","Abóbora","Chuchu","Côco"],
                    ["Matilha","Rebanho","Alcateia","Manada"],
                    ["Equilátero","isóceles","Escaleno","Trapézio"],
                    ["Dom Pedro I","Manuel Bandeira","Caperguntao Alvez","Carlos Gomes"] 
                ];

    $gabarito = [3,1,0,2,0];

    function PegarPergunta($index)
    {
        $comeco = "\t\t" . '<div class="container">';
        $fim = "</div>\n";
        $pergunta = $comeco . $GLOBALS["perguntas"][$index] . "</br>";
        $letras = ["A","B","C","D","E"];
        for($i=0;$i<4;$i++)
        {
            $pergunta = $pergunta .$letras[$i] .")  " .$GLOBALS["respostas"][$index][$i] ."</br>";
        }
        $pergunta = $pergunta . "Resposta correta: " .$letras[$GLOBALS["gabarito"][$index]] . ")  " . $GLOBALS["respostas"][$index][$GLOBALS["gabarito"][$index]] . "</br></br>" . $fim;
        return $pergunta;
    }

    function MostrarTodasQuestoes()
    {
        $comeco = "\t\t" . '<div class="row">' . "\n";
        $fim = "\t\t</div>\n";
        $formatado = "";
        $aux = 0;
        
        foreach ($GLOBALS["perguntas"] as $key => $value)
        {
            if($aux == 0)
            {
                $formatado = $formatado . $comeco;
            }else if($aux == 3)
            {
                $formatado = $formatado . $fim;
                $formatado = $formatado . $comeco;
                $aux = 0;
            }
            $formatado = $formatado . PegarPergunta($key);
            $aux++;
        }
        return $formatado . $fim;
    }
?>

<!DOCTYPE html >
<html>
    <head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Bem vindo ao Show do Bilhão</title>
    </head>

    <body>

        <div id = "Rotulo">
            <h1>Responda as 5 perguntas corretamente para ganhar o show do bilhao:</h1>
        </div>

        <div class="container">
            <?php echo MostrarTodasQuestoes() ?>
        </div>
   
    </body>

    <?php include "rodape.inc";?>

</html>