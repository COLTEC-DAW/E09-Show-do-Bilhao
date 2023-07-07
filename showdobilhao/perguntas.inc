<?php


    $arquivo = fopen("perguntas.json", 'r');
    $questoes = json_decode(fread($arquivo, filesize("perguntas.json")));
    fclose($arquivo);
    $enunciados = [];
    $alternativas = [];
    $respostas_corretas = [];
    

    foreach ($questoes as $questao) {
        array_push($enunciados, $questao->enunciado);
        array_push($alternativas, $questao->alternativas);
        array_push($respostas_corretas, $questao->respostaCorreta);
    }

    // Função para carregar a pergunta com base no índice
    function carregaPergunta($id) {
        global $enunciados, $alternativas, $respostas_corretas;
        
        if (isset($enunciados[$id]) && isset($alternativas[$id]) && isset($respostas_corretas[$id])) {
            return [
                'enunciado' => $enunciados[$id],
                'alternativas' => $alternativas[$id],
                'resposta_correta' => $respostas_corretas[$id]
            ];
        } else {
            return false;
        }
}
?>
