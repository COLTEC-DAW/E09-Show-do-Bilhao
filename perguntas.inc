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

    function PegarPerguntaIndividual($id)
{
    if($id<0 || $id==null)
    {
        
        return "Id não corresponde a nenhuma pergunta do Jogo :(.";

    }

    $comeco = '<div>';
    $fim = "</div>\n";

    $pergunta = $comeco . $GLOBALS["perguntas"][$id] . "</br>";

    $letras = ["A","B","C","D"];

    for($i=0;$i<4;$i++)
    {
        $pergunta = $pergunta . '<input type="radio" name="options" value="'.$i.'"></input> '.$letras[$i] .") ".$GLOBALS["respostas"][$id][$i] . "</br>";
    }

    $pergunta = $pergunta."</br></br>".$fim;

    return $pergunta;
}

    function PegarPergunta($num)
    {
        $comeco = '<div>';
        $fim = "</div>\n";
        $numQ = $num + 1;

        $pergunta = $comeco ."$numQ) ".$GLOBALS["perguntas"][$num] . "</br>";
        $letras = ["A","B","C","D","E"];

        for($i=0;$i<4;$i++)
        {
            $pergunta = $pergunta .$letras[$i] .")  ".$GLOBALS["respostas"][$num][$i]."</br>";
        }

        $pergunta = $pergunta."A resposta correta para a questão é : ".$letras[$GLOBALS["gabarito"][$num]].")"."</br></br>".$fim;

        return $pergunta;
    }

    function MostrarTodasQuestoes()
    {

        $comeco = '<div>'."\n\n";
        $fim = "</div>\n";
        $PFormatadas = "";
        $aux = 0;

        foreach ($GLOBALS["perguntas"] as $key => $value)
        {
            if($aux == 0)
            {
                $PFormatadas = $PFormatadas.$comeco;
            }

            $PFormatadas = $PFormatadas.PegarPergunta($key);
            $aux++;

        }
        return $PFormatadas . $fim;
    }

?> 