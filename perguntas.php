<html>
    <body>
    <?php
    foreach ($enunciados as $key => $enunciado) {
        echo "<div class=\"questao\" style=\"border: solid 1px black; border-radius: 30px; width: 500px; padding: 20px; margin-bottom: 15px;\">";
        echo "<h2>Questão $key</h2>";
        echo "<strong>$enunciado</strong>";
        foreach($alternativas[$key] as $alternativa_key => $alternativa){
            echo "<p>$alternativa_key) $alternativa</p>";
        }

        echo "</div>" .PHP_EOL;

    }
?>
    </body>
</html>
