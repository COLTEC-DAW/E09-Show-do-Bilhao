<?php
function carregaPergunta($id, $enunciados, $alternativas){
    echo "<h2> {$enunciados[$id]} </h2>";
    echo "<ol type='A'>";
    for($j = 0; $j < count($alternativas[$id]); $j++){
        echo "<li>{$alternativas[$id][$j]} </li>";
    }
    echo "</ol>";
}
?>