<?php
function load_question($id) {
    require "models/Questions.inc";
    $perguntas = json_decode(file_get_contents("perguntas.json"));
    
    $pergunta = new Question();
    $pergunta->enunciado = $perguntas[$id]->enunciado;
    $pergunta->alternativas = $perguntas[$id]->alternativas;
    $pergunta->resposta = $perguntas[$id]->resposta;
    return array(
        "question" => $pergunta->enunciado,
        "options" => $pergunta->alternativas,
        "answer" =>  $pergunta->resposta
    );
}
?>
