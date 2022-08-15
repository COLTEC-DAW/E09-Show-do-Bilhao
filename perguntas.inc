<?php

    function carregaPergunta($id, $perguntas, $alternativas){

        echo "<form action='nextPage.php' method='POST'>";
        echo "<h3>{$perguntas[$id]}</h3>";
        echo "<input type='hidden' value='{$id}' name='question'>";
        for($i = 0; $i < count($alternativas[$id]); $i++){ 
            echo "<input type=radio name='answer' value='$i' required>{$alternativas[$id][$i]}</input></br>";
        }
        echo "<br><input type=submit>";
        echo "</form>";
    }

?>

