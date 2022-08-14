<?php

    function carregaPergunta($id, $perguntas, $alternativas){

        echo "<h3>{$perguntas[$id]}</h3>";
        echo "<ol type='A'>";
        for($i = 0; $i < count($alternativas[$id]); $i++){ 
            echo "<li>{$alternativas[$id][$i]} </li>";
        }
        echo "</ol>";
    }
?>