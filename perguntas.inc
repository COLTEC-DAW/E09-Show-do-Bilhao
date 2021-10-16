<?php

$GLOBALS["vetorEnunciados"] =
[
    "PERGUNTA 1",
    "PERGUNTA 2",
    "PERGUNTA 3"
];
$GLOBALS["matrizAlternativas"] =
[
    [
        "ALTERNATIVA 1",
        "ALTERNATIVA 2",
        "ALTERNATIVA 3",
        "ALTERNATIVA 4"
    ],
    [
        "ALTERNATIVA 1",
        "ALTERNATIVA 2",
        "ALTERNATIVA 3",
        "ALTERNATIVA 4"
    ],
    [
        "ALTERNATIVA 1",
        "ALTERNATIVA 2",
        "ALTERNATIVA 3",
        "ALTERNATIVA 4"
    ]
];
$GLOBALS["vetorAlternativasCorretas"] =
[
    1,
    0,
    3
];

define("NUM_ALTERNATIVAS", 4);
define("NUM_PERGUNTAS", 3);

function GetPergunta($id)
{
    return [GetPerguntaEnunciado($id), GetPerguntaAlternativas($id), GetPerguntaAlternativasCorretaId($id)];
}

function GetPerguntaEnunciado($id)
{
    return $GLOBALS["vetorEnunciados"][$id];
}

function GetPerguntaAlternativas($id)
{
    return $GLOBALS["matrizAlternativas"][$id];
}

function GetPerguntaAlternativasCorretaId($id)
{
    return $GLOBALS["vetorAlternativasCorretas"][$id];
}

?>  