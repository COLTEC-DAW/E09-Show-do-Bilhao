<?php
    $gabarito = ["B", "B", "C", "D", "E"];

    $enunciados = ["Qual o maior sonho de Isagi Yoichi, de Blue Lock: ", 
                    "enum 2", 
                    "enun 3", 
                    "enun 4", 
                    "enun 5"];

    $alternativas = [["Se tornar o melhor goleiro do mundo.", "Se tornar o melhor atancante do mundo.", "Se tornar o melhor ala do mundo.", "Se tornar o melhor assassino do mundo."],
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