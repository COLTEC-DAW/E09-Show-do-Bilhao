<?php
    function pergunta($id){
        global $perguntas, $alternativas, $alt;
        if($id < sizeof($perguntas) && $id >= 0 && $id != null){
            $id_novo = $id+1;
            $alter = $alternativas[$id];
            echo "<h3>$id_novo) $perguntas[$id]</h3>";
            for($j = 0; $j < 4; $j++){
                echo "$alt[$j] $alter[$j]<br>";
            }
            include 'rodape.inc';
        }
        else if($id == null){
            echo '<h2>Nenhuma pergunta foi selecionada</h2>';
        }
        else{
            echo '<h3>Pergunta não existente</h3>';
        }
    }
?>