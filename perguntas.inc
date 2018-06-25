<?php
    function carregaPergunta($int){
        $enunciados = array("Qual a cor da roupa vermelha do rei?",
        "Qual a fabricante do Samsung Galaxy S9?",
        "Qual a razão de potência sobre peso do Koenigsegg One:1 ?",
        "Quantos cores tem o processador Intel Dual Core?",
        "Quantos rins custa o Iphone 8?");

        $alternativas = array(  array("Ele está pelado","Vermelha","Verde","Grande"),
            array("Apple","GM","Hyundai","Samsung"),
            array("3,14","0","1","2"),
            array("2","8","1","É lento"),
            array("R$ 3.080,00","1","8","X barra (10000 em algarismos romanos)"),);

        $certas = array(1,3,2,0,2);  

        $pergunta = $int + 1;
        $repostas = $alternativas[$int];
        echo "
            <div>
                <h2>$enunciados[$int]</h2>
                <form>
                    <input type=\"radio\" name=\"p$pergunta\" id=\"p$pergunta" . "a\">$repostas[0] <br>
                    <input type=\"radio\" name=\"p$pergunta\" id=\"p$pergunta" . "b\">$repostas[1] <br>
                    <input type=\"radio\" name=\"p$pergunta\" id=\"p$pergunta" . "c\">$repostas[2] <br>
                    <input type=\"radio\" name=\"p$pergunta\" id=\"p$pergunta" . "d\">$repostas[3] <br>
                </form>
        ";
        return $pergunta;
    }
?>