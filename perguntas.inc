<?php
    $perguntas[] = "Primeira pergunta";
    $perguntas[] = "Segunda pergunta";
    $perguntas[] = "Terceira pergunta";
    $perguntas[] = "Quarta pergunta";
    $perguntas[] = "Quinta pergunta";

    $certas[] = [1, 1, 3, 2, 0];

    $alternativas[0] = array("Alternativa 1", "Alternativa 2", "Alternativa 3", "Alternativa 4");
    $alternativas[1] = array("Alternativa 1", "Alternativa 2", "Alternativa 3", "Alternativa 4");
    $alternativas[2] = array("Alternativa 1", "Alternativa 2", "Alternativa 3", "Alternativa 4");
    $alternativas[3] = array("Alternativa 1", "Alternativa 2", "Alternativa 3", "Alternativa 4");
    $alternativas[4] = array("Alternativa 1", "Alternativa 2", "Alternativa 3", "Alternativa 4");

    function carrega_perguntas($perguntas, $alternativas){
        $indice = 0;
        foreach($perguntas as $pergunta){                   
            echo "<h3>$pergunta</h3>";
            foreach($alternativas[$indice] as $alternativa){
                echo "<div class=\"form-check\">
                    <input class=\"form-check-input\" id=\"Check$indice\" type=\"radio\" name=\"pergunta$indice\">
                    <label class=\"form-check-label\" for=\"Check$indice\">$alternativa</label>
                </div>";
            }
            $indice++;
        }
    }

    function carrega_pergunta($pergunta, $alternativas, $id){
        $indice = 0;
            echo "<h3>" . $pergunta . "</h3>";
            foreach($alternativas as $alternativa){
                $indice++;
                echo "<div class=\"form-check\">
                    <input class=\"form-check-input\" id=\"Check$indice\" type=\"radio\" name=\"alt$indice\">
                    <label class=\"form-check-label\" for=\"Check$indice\">$alternativa</label>
                </div>";
            }
            $id = intval($id);
            $id++;
            echo "<input type=\"hidden\" name=\"id\" value=\"$id\"> ";
    }
?>
