<?php 

    $id = $_GET["id"];
    
    function carregaPergunta($id) {

        global $alternativas, $perguntas, $gabarito;

        if ($id < count($perguntas)) {
            $pergunta = new Questoes($perguntas[$id], $alternativas[$id], $gabarito[$id]);
            $pergunta->ImprimiQuestoes();
        }
        else {
            echo "Pergunta não encontrada.";
        }
    }
?>
