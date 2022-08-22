<?php

function verificaIdPergunta($id, $perguntas){
        $id = intval($id);
        if(!is_int($id)) return false;
        if($id>=0 && $id <= count($perguntas)) return true;
        return false;
}

function carregaPergunta($id, $perguntas, $alternativas){
    echo "<h2> {$perguntas[$id]} </h2>";
    echo "<ol type='A'>";
    for($j = 0; $j < count($alternativas[$id]); $j++){
        echo "<li>{$alternativas[$id][$j]} </li>";
    }
    echo "</ol>";
}
?>