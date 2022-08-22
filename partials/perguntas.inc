<?php
function carregaPergunta($id, $enunciado, $alternativa){
    echo "<form action='perguntas.php' method='post'>";
    echo "<h2> {$enunciado[$id]} </h2>";
    echo "<input type='hidden' value='{$id}' name='pergunta'>";    
    for($j = 0; $j < count($alternativa[$id]); $j++){
        echo "<div><input type='radio' id='{$j}' name='alternativa' value='{$j}'><label for='{$j}'>{$alternativa[$id][$j]}</label></div>";
    }
    echo "<br>";
    echo "<button type='submit'>Enviar</button>";
    echo "</form>";
}
?>