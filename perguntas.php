<?php
    define ("nPerguntas", 5, false);

    $perguntas = [
        "Quantas estrelas tem na bandeira do Brasil?",
        "O Papel foi inventado há mais de 2000 anos atrás em qual País?",
        "Qual é o coletivo de cães?",
        "Qual foi o último Presidente do período da ditadura militar no Brasil?",
        "Em que parte do corpo se encontra a epiglote?",
    ];

    $alternativas = [
        0 => [
            "28",
            "27", //c
            "26",
            "25",
        ],
        1 => [
            "Inglaterra",
            "Egito",
            "India",
            "China", //c
        ],
        2 => [
            "Matilha", //c
            "Rebanho",
            "Alcateia",
            "Manada",
        ],
        3 => [
            "Costa e Silva",
            "João Figueiredo", //c
            "Ernesto Geisel",
            "Emílio Médici",
        ],
        4 => [
            "Estômago",
            "Pâncreas",
            "Rim",
            "Boca", //c
        ]
    ];

    $respostas = [1,3,0,1,3];
?>
