<?php
function carregaPerguntas() {
    $perguntasJson = file_get_contents('/perguntas.json');
    $perguntasArray = json_decode($perguntasJson, true);

    $perguntas = array();

    foreach ($perguntasArray as $pergunta) {
        $enunciado = $pergunta['pergunta'];
        $alternativas = $pergunta['alternativas'];
        $resposta = $pergunta['resposta'];

        $perguntas[] = array(
            'enunciado' => $enunciado,
            'alternativas' => $alternativas,
            'resposta' => $resposta
        );
    }

    return $perguntas;
}

function carregaPergunta($id) {
    $perguntas = carregaPerguntas();

    // Verifica se o ID da pergunta é válido
    if ($id >= 0 && $id < count($perguntas)) {
        return $perguntas[$id];
    } else {
        return false; // ID da pergunta inválido
    }
}
?>
