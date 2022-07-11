<?php
    function carregaPergunta($id, $enunciados, $alternativas){
        $max = sizeof($enunciados);
        
        if($id == 0){
            for($i = 0; $i < $max; $i++){
                echo "<h4> {$enunciados[$i]} </h4>";
            
                echo "<ol>";
                foreach($alternativas[$i+1] as $alternativa){
                    echo "<li> {$alternativa} </li>";
                }
                echo "</ol>";
            }

            return 200;
        } 
        
        if($id <= $max){
            echo "<h4> {$enunciados[$id-1]} </h4>";
        
            echo "<ol>";
            foreach($alternativas[$id] as $alternativa){
                echo "<li> {$alternativa} </li>";
            }
            echo "</ol>";

            return 200;
        } else {
            echo "<h1> 400 - Bad Request </h1>";
            echo "<h4> Valor de ID maior que o esperado. Altere o campo e tente novamente.</h4>";
            return 400;
        }
    }
?>