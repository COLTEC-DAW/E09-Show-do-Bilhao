<?php 
    $perguntas = array("Pergunta 1:",
                    "Pergunta 2",
                    "Pergunta 3",
                    "Pergunta 4",
                    "Pergunta 5");

    $alternativas = array(array("a","b","c","d"),
                          array("a","b","c","d"),
                          array("a","b","c","d"),
                          array("a","b","c","d"),
                          array("a","b","c","d"),);

    $respostas = array("a","b","c","d","a");
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Jogo do Bilhão</title>
    </head>
    <body>
        <form>
            <?php
                $i = 0;
                foreach ($perguntas as $pergunta){
                    echo "<fieldset>";
                    echo "<legend> $pergunta </legend>";                    

                    foreach($alternativas[$i] as $key => $value)
                    {
                        echo "<input type=\"radio\" name=\"pergunta$i\" value=\"$key\">$value<br>";
                    }

                    echo "</fieldset> <br>";
                    $i++;
                }
            ?>
        </form>
    </body>
</html>