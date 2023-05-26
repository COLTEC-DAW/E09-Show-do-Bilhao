<?php
    $gabarito = ["A", "B", "C", "D", "E"];

    $enunciados = ["enun 1", "enun 2", "enun 3", "enun 4", "enun 5"];

    $alternativas = [["alt 1 p1", "alt 2 p1", "alt 3 p1", "alt 4 p1"],
                    ["alt 1 p2", "alt 2 p2", "alt 3 p2", "alt 4 p2"],
                    ["alt 1 p3", "alt 2 p3", "alt 3 p3", "alt 4 p3"],
                    ["alt 1 p4", "alt 2 p4", "alt 3 p4", "alt 4 p4"],
                    ["alt 1 p5", "alt 2 p5", "alt 3 p5", "alt 4 p5"]];


    function carregaPergunta($id){
        global $enunciados;
        global $alternativas;
        global $gabarito;

        $pergunta = $enunciados[$id];
        $alt = $alternativas[$id];
        $resposta = $gabarito[$id];

        $dados = [$pergunta, $alt, $resposta];

        return $dados;

    }

?>