
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

    $altCorretas = array("0","1","2","3","0","1","2","3","0","1");

    function carregaProgresso($numPerg){
        
        echo "<p>Acertos: $numPerg/10</p>";
    }

    function carregaPergunta($numPerg){

        global $perguntas;
        global $alternativas;
        global $altCorretas;

        echo "<fieldset>";
        echo "<legend> $perguntas[$numPerg] </legend>";

        foreach($alternativas[$numPerg] as $key => $value){

            echo "<input type=\"radio\" name=\"alternativa\" value=\"$key\">$key<br>";
        }

        $numPerg++;
        echo "<input type=\"hidden\" name=\"perguntaAnterior\" value=\"$numPerg\">";
        echo "<input type=\"submit\" name=\"Enviar\">";
        echo "</fieldset> <br>";
    }

    function autenticaOpcao($opcaoEscolhida, $numPergunta){

        global $altCorretas;

        $pergAnterior = (int)$numPergunta - 1;

        if (((int)$numPergunta) == 0){
            return true;
        }
        else if ((int)$altCorretas[$pergAnterior] == $opcaoEscolhida){
            
            return true;
        }
        else{
            return false;
        }
    }

?>