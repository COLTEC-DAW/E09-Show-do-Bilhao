<?php 
    $perguntas = array("a",
                    "b",
                    "c",
                    "d",
                    "e",
                    "f",
                    "g",
                    "h",
                    "i",
                    "j");

    $alternativas = array(array("a","b","c","d"),
                          array("i","o","i","o"),
                          array("a","b","c","d"),
                          array("a","b","c","d"),
                          array("a","b","c","d"),
                          array("a","b","c","d"),
                          array("a","b","c","d"),
                          array("a","b","c","d"),
                          array("a","b","c","d"),
                          array("a","b","c","d"));

    $altCorreta[] = array("","","","","","","","","","");
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

                    foreach($alternativas[$i] as $key => $value){

                        echo "<input type=\"radio\" name=\"pergunta$i\" value=\"$key\">$value<br>";
                    }

                    echo "</fieldset> <br>";
                    $i++;
                }
            ?>
        </form>
    </body>
</html>
