<?php 

    $id = $_GET["id"];
    
    function carregaPergunta($id) {

        global $alternativas, $perguntas, $gabarito;

        if ($id < count($perguntas)) {
            $pergunta = new Questoes($perguntas[$id], $alternativas[$id], $gabarito[$id]);
            
            return $perguntas;
        }
    }
    
    function ImprimiQuestoes() {
        
        global $alternativas, $perguntas, $gabarito;

        echo "<p>$$perguntas</p>";

        foreach ($alternativas as $indice => $alternativa) {
            echo "<input type='radio' name='resposta_$indice' value='$indice'> $alternativa <br>";
        }
        
        echo "<br>Resposta correta: $gabarito";
        echo "<br>";
    }
?>
