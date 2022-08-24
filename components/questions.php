<?php 

    function loadQuestion($id, $statements, $alternatives) {
        echo "<form action='question.php' method='post'>";
        echo $statements[$id];

        echo "<br>";
        echo "<input type='hidden' name='question' value='{$id}'>";
        echo "<br>";

        for($j = 0; $j < sizeof($alternatives); $j++) {
            echo "<input type='radio' id='{$j}' name='alternative' value='{$j}'>";
            echo "<label for='{$j}'>{$alternatives[$id][$j]}</label>";
            echo "<br>";
        }

        echo "<br>";
        echo "<button type='submit'>Enviar</button>";
        echo "</form>";
    }
?>