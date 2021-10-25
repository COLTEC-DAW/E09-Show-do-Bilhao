<?php
    include "dataPerguntas.inc";
    $carregaPergunta = function ($id) use ($enunciados,$alternativas,$keys){
        if(is_numeric($id) && $id < count($enunciados) && $id >= 0){
            echo "<strong>{$enunciados[$id]}</strong>";
            echo "<ol type = 'A'>";
                foreach ($alternativas[$keys[$id]] as $alternativa) {
                    echo "<li>$alternativa</li>";
                }
            echo "</ol>";
        } else {
            echo "<strong>Questão Inexistente</strong>";
        }
    };

    //talvez use
    // function letraResposta($indice){
    //     $letra = array("A","B","C","D");
    //     return $letra[$indice];
    // }
?>