<?php
    require "Models/QuestionDao.php";
    $dao = new QuestionDao();
    $perguntas = $dao->read(null); // Lê as perguntas


    function carrega_perguntas($perguntas){
        $indice = 0;
        foreach($perguntas as $pergunta){                   
            echo "<h3>$pergunta->enunciado</h3>";
            foreach($pergunta->alternativas as $alternativa){
                echo "<div class=\"form-check\">
                    <input class=\"form-check-input\" id=\"Check$indice\" type=\"radio\" name=\"pergunta$indice\">
                    <label class=\"form-check-label\" for=\"Check$indice\">$alternativa</label>
                </div>";
            }
            $indice++;
        }
    }

    function carrega_pergunta($pergunta, $id){
        $indice = 0;
        $id = intval($id);
        $id++;   
        echo "<h3>" . $pergunta->enunciado . "</h3>";
        foreach($pergunta->alternativas as $alternativa){
            $indice++;
            echo "<div class=\"form-check\">
                <input class=\"form-check-input\" value=\"alt$indice\" type=\"radio\" name=\"pergunta$id\">
                <label class=\"form-check-label\">$alternativa</label>
            </div>";
        }
        echo "<input type=\"hidden\" name=\"id\" value=\"$id\"> ";
        echo '<button type="submit" class="btn btn-primary">Próximo</button>';

    }

    function ganhou(){
        include "Includes/ganhou.inc";
    }

    function perdeu(){
        include "Includes/perdeu.inc";
    }

?>
