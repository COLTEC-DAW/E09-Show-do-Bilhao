<?php
    function carregaQuestao($id, $questoes, $opcoes){
        echo "<h2> {$questoes[$id]} </h2>";
        echo "<ol type='A'>";
        for($j = 0; $j < count($opcoes[$id]); $j++){
            echo "<li>     {$opcoes[$id][$j]} <input type='radio' name='resposta' value='$y' required='required'> </li>";
        }
        echo "</ol>";
        echo '<button type="submit" id="confirmar">Confirmar</button>';
    }
?>