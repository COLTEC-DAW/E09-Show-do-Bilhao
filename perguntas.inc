<?php
    function carregaPergunta($i){
        // ARRAY PERGUNTAS
        $perguntas = array (
            "1 - Qual o maior país do mundo?",
            "2 - Qual o planeta pertencemos?",
            "3 - Onde foi a copa do mundo de 2010?",
            "4 - Onde foi a copa do mundo de 2006?",
            "5 - A letra D é a correta!?"
        );
        // ARRAY RESPOSTAS
        $alternativas = array (
            array("Rússia","Brasil","China","Canadá"),
            array("Marte","Urano","Vênus","Terra"),
            array("Rússia","Brasil","China","África do Sul"),
            array("Rússia","Brasil","Alemanha","Canadá"),
            array("A","B","C","D")
        );
        // ALTERNATIVAS CORRETAS
        $respostasCorretas = array (1,4,4,3,4);
        
        // 
        $numeroDaPergunta = array ("q0", "q1", "q2", "q3", "q4");

        //PEGAR O ARRAY QUE CONTEM AS ALTERNATIVAS DA PERGUNTA $i
        $respostasParaCadaPergunta = $alternativas[$i];
        echo "
            <h1>$perguntas[$i]</h1>
            <form>
                <input type=\"radio\" name=\"$numeroDaPergunta[$i]\" value=\"1\">$respostasParaCadaPergunta[0] <br>
                <input type=\"radio\" name=\"$numeroDaPergunta[$i]\" value=\"2\">$respostasParaCadaPergunta[1] <br>
                <input type=\"radio\" name=\"$numeroDaPergunta[$i]\" value=\"3\">$respostasParaCadaPergunta[2] <br>
                <input type=\"radio\" name=\"$numeroDaPergunta[$i]\" value=\"4\">$respostasParaCadaPergunta[3] <br>
            </form>
        ";
        $proximaPergunta = $i + 1;
    return $proximaPergunta;
    }
?>