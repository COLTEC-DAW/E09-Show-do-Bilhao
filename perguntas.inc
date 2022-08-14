<?php

    function carregaPergunta($id, $perguntas, $alternativas){

        $nextPage = $id + 1;
        echo "<h3>{$perguntas[$id]}</h3>";
        //echo "<form action='perguntas.php?id={$nextPage}' method='POST'>";
        echo "<form action='teste.php' method='POST'>";
        for($i = 0; $i < count($alternativas[$id]); $i++){ 
            echo "<input type=radio name='answer' value='$i' required>{$alternativas[$id][$i]}</input></br>";
        }
        echo "<br><input type=submit>";
        echo "</form>";
    }

?>

