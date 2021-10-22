<?php

require "classPergunta.php";

    function mostraPergunta($id){

        
        $pergunta = Question::loadQuestion($id);

        $enunciado = $pergunta->getPergunta();
        $alternativas = $pergunta->getAlternativas();
        $resposta = $pergunta->getResposta();
        
        echo "<h3>" . " $enunciado </h3>";

        echo "<form action = 'resposta.php' method = 'post'>";

        for ($j = 0; $j < count($alternativas); $j++) {

            echo ("<input type = 'radio' id=". $j ." name = 'option' value=" .$j. ">
                <label for = ".$j."> ".$alternativas[$j]."</label><br>");

        }

        echo "<br>";
        echo "<input type = 'hidden' name = 'id' value = '$id'>";
        echo "<input type = 'hidden' name = 'resposta' value = ".$resposta.">";
        echo "<input type = 'submit' value='Enviar'>";
        echo "<br><br><br><br>";
        echo "</form>";

    }



    



    



  


?>
