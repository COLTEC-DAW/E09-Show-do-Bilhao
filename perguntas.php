<?php

// Enunciados das questões
$enunciados = array(
    "1" => "Em que estado brasileiro nasceu a apresentadora Xuxa?",
    "2" => "Qual é o nome dado ao estado da água em forma de gelo?",
    "3" => "Às margens de que riacho foi proclamada a Independência do Brasil?",
    "4" => "Em que estado norte-americano fica a cidade de Miami?",
    "5" => "Em que cidade foram realizados os jogos olímpicos de 2000?"
);

// Alternativas para cada questão
$alternativas = array(
    "1" => array(
        "A" => "Rio de Janeiro",
        "B" => "Rio Grande do Sul",
        "C" => "Santa Catarina",
        "D" => "Goiás"
    ),
    "2" => array(
        "A" => "Líquido",
        "B" => "Sólido",
        "C" => "Gasoso",
        "D" => "Vaporoso"
    ),
    "3" => array(
        "A" => "Cambuci",
        "B" => "Sacomã",
        "C" => "Ipiranga",
        "D" => "São Francisco"
    ),
    "4" => array(
        "A" => "Alasca",
        "B" => "Nova York",
        "C" => "Flórida",
        "D" => "Califórnia"
    ),
    "5" => array(
        "A" => "Munique",
        "B" => "Sidney",
        "C" => "Tóquio",
        "D" => "Atlanta"
    )
);


// Alternativa correta de cada questão
$alternativas_corretas = array(
    "1" => "B",
    "2" => "B",
    "3" => "C",
    "4" => "C",
    "5" => "B"
);



echo $json_encode($enunciados);
echo "\n\n\n";

echo $json_encode($alternativas);
echo "\n\n\n";

echo $json_encode($alternativas_corretas);
echo "\n\n\n";
