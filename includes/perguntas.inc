<?php

    $enunciados = [
        "Quem traiu a cantora brasileira Joelma?",
        "Na frase 'sabe de nada' do grande pensador contemporâneo Compadre Washington, o sujeito é:",
        "Quem vai ganhar a Copa do Mundo 2022?",
        "Um carro foda X Celta 2012, os dois a 80km, um fica do lado do outro?",
        "Quem é o melhor rapper da atualidade?"
    ];

    $alternativas = [
        0 => [
            "A lua",
            "O chimbinha",
            "A lua e o chimbinha",
            "Willian Bonner"
        ],
        1 => [
            "Simples",
            "Indeterminado",
            "Oculto",
            "Inocente"
        ],
        2 => [
            "França",
            "Brasil",
            "Bélgica",
            "Fagner"
        ],
        3 => [
            "Creio que não",
            "Claro",
            "Sim, 80km é 80km",
            "Menino Ney"
        ],
        4 => [
            "Drake",
            "Eminem (humilde)",
            "xxxtentação deus do rap (RIP)",
            "Post Malone"
        ]
    ];

    $respostas = [5];

    $respostas[0] = "A lua e o chimbinha";
    $respostas[1] = "Inocente";
    $respostas[2] = "Fagner";
    $respostas[3] = "Creio que não";
    $respostas[4] = "xxxtentação deus do rap (RIP)";

function carregaPergunta($id, $prova) {
        global $enunciados, $alternativas;

        if ($prova == false) {
            echo "<progress class='progress is-success' value='$id' max='5'>" . $id*20 . "</progress>";
        }
        echo "<article class='message is-6'>
        <div class='message-header'>
            <p>
                <b> $id </b> - 
                $enunciados[$id] 
            </p>
        </div>";

        echo "<div class='message-body'>";

        foreach($alternativas[$id] as $alternativa) {
            echo "<input type='radio' name='resposta' value='$alternativa'>" .
                        $alternativa . 
                    "<br>";
        }

        $id++;

        echo "<input type='hidden' name='id' value='$id'>
        </div>
        </article>";
}

function verificaResposta($id, $resposta) {
    global $respostas;

    if ($resposta != $respostas[$id]) {
        header('Location: errou.php');
    }
}

?>