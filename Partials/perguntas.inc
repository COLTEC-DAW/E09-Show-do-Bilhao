<?php
function carregaPergunta($id, $questions, $options){
    echo "<h2>{$questions[$id]}</h2>";
    echo "<ul>";
    for($i = 0; $i < count($options[$id]); $i++){
        echo "<li>{$options[$id][$i]}</li>";
    }
    echo "</ul>";
}
if(!isset($_GET['id'])){
    carregaPergunta(0, $questions, $options);
} else{
    carregaPergunta($_GET['id'], $questions, $options);
}
?>