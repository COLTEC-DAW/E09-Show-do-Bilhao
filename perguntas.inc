<?php
function carregaPergunta($id)
{
    // Array com os enunciados das perguntas
    $enunciados = array(
        "Qual é a capital da França?",
        "Qual é o maior planeta do Sistema Solar?",
        "Quem pintou a Mona Lisa?"
    );

    // Matriz com as alternativas das perguntas
    $alternativas = array(
        array("a) Londres", "b) Paris", "c) Madri", "d) Roma"),
        array("a) Júpiter", "b) Marte", "c) Saturno", "d) Vênus"),
        array("a) Michelangelo", "b) Leonardo da Vinci", "c) Pablo Picasso", "d) Vincent van Gogh")
    );

    // Vetor com os índices das alternativas corretas
    $respostas_corretas = array(1, 0, 1);

    if ($id >= 0 && $id < count($enunciados)) {
        $pergunta = array(
            'enunciado' => $enunciados[$id],
            'alternativas' => $alternativas[$id],
            'resposta_correta' => $respostas_corretas[$id]
        );
        return $pergunta;
    }

    return null;
}
?>
