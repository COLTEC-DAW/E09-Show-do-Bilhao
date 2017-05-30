<?php
    
    function carregaPergunta($id){
        global $enunciados;
        global $alternativas; 
            echo "<p>Questao:  " .  $enunciados[$id] . " </p>";
            for($i=$id;$i<4;$i++){
                echo "<p> " . $alternativas[$id][$i] . "</p>";
            }
    }
?>