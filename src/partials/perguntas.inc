<?php
function carregaPergunta($id, $enunciados, $alternativas){
    echo "<form action='perguntas.php' method='post'>";
    echo "<h2> {$enunciados[$id]} </h2>";
    echo "<input type='hidden' value='{$id}' name='pergunta'>";    
    for($j = 0; $j < count($alternativas[$id]); $j++){
        echo "<div><input type='radio' id='{$j}' name='alternativa' value='{$j}'><label for='{$j}'>{$alternativas[$id][$j]}</label></div>";
    }
    echo "<br>";
    echo "<button type='submit'>Enviar</button>";
    echo "</form>";
}
?>