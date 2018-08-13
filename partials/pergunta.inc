<?php
    $file = "../data/questoes.json";
    $json = file_get_contents($file);
    $data = json_decode($json);

    function carregaPergunta($id) {
        global $data;
        $perguntas = $data->{'perguntas'};
        $perg = $perguntas[$id];
        return $perg;
    }

    function carregaOpcoes($id) {
        global $data;
        $opcoes = $data->{'alternativas'}[$id];
        return $opcoes;
    }
?>