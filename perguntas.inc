<?php 
/*
    $id = $_GET["id"];
    
    $dadosJson = file_get_contents('questoes.json');
    $dadosJsonDecode = json_decode($dadosJson, true);

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
    }*/
?>
