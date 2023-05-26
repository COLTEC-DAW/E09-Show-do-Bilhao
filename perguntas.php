<?php
$perguntas = array(
    "pergunta1",
    "pergunta2",
    "pergunta3",
    "pergunta4",
    "pergunta5",
    "pergunta6"
);
$alternativas = array(
    array(
        "a",
        "b",
        "c",
        "d"
    ),
    array(
        "a",
        "b",
        "c",
        "d"
    ),
    array(
        "a",
        "b",
        "c",
        "d"
    ),
    array(
        "a",
        "b",
        "c",
        "d"
    ),
    array(
        "a",
        "b",
        "c",
        "d"
    ),
    array(
        "a",
        "b",
        "c",
        "d"
    )
);
$respostas = array(0, 3, 2, 3, 1, 2);

function carregarPergunta($num){
    global $perguntas;
    global $alternativas;
    global $respostas;
    $vector[0] = $perguntas[$num];
    $vector[1] = $alternativas[$num];
    $vector[2] = $respostas[$num];

    return $vector;
}
?>