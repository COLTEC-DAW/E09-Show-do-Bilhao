<?php
function load_question($id) {
    $perguntas = json_decode(file_get_contents("perguntas.json"));

    return array(
        "question" => $perguntas[$id]->enunciado,
        "options" => $perguntas[$id]->alternativas,
        "answer" =>  $perguntas[$id]->resposta
    );
}
?>
