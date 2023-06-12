<?php 

    public function carregaPergunta(id) {

    }
    include "perguntas.php"; 
    $id = $_GET["id"];



    if ($id < count($perguntas)) {
        $pergunta = new Questoes($perguntas[$id], $alternativas[$id], $gabarito[$id]);
        $pergunta->ImprimiQuestoes();
    } else {
        echo "Pergunta não encontrada.";
    }
        echo "alo tropa";
?>
