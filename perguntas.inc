<?php
    define ("nPerguntas", 5, false);

    $perguntas = [
        "Quantas estrelas tem na bandeira do Brasil?",
        "O Papel foi inventado há mais de 2000 anos atrás em qual País?",
        "Qual é o coletivo de cães?",
        "Qual foi o último Presidente do período da ditadura militar no Brasil?",
        "Em que parte do corpo se encontra a epiglote?",
    ];

    $alternativas = [
        ["28","27","26","25"],
        ["Inglaterra","Egito","India","China"],
        ["Matilha","Rebanho","Alcateia","Manada"],
        ["Costa e Silva","João Figueiredo","Ernesto Geisel","Emílio Médici"],
        ["Estômago","Pâncreas","Rim","Boca"]
    ];

    $respostas = [1,3,0,1,3];

    // funções
    function IdValido($id, $show){
        if ($id >= 0 && $id <= nPerguntas){
            return true;
        } else {
            if ($show == true){
                echo "ERRO: ID inválido_".$id;
            }
            return false;
        }
    }

    function carregaPergunta($id){
        global $perguntas, $alternativas, $respostas;
        
        $selectedPergunta = [
            "texto" => $perguntas[$id],
            "alternativa" => $alternativas[$id],
            "resposta" => $respostas[$id]
        ];
        return $selectedPergunta;
    }

    function imprimePergunta($id){
        $selectedPergunta = carregaPergunta($id);

        echo $selectedPergunta["texto"]."<br>";
        for($i = 0; $i < 4; $i++){
            echo $selectedPergunta["alternativa"][$i]."<br>";
        }
        echo "<br>Resposta Correta: ".$selectedPergunta["alternativa"][$selectedPergunta["resposta"]]."<br>";
    }
?>