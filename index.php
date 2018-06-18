<?php
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
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Show do Bilhão</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    <h1>O show do bilhão</h1>
    <div class="perguntas">
        <?php
            for($int = 0;$int<5;$int++){
                $pergunta = $int + 1;
                $repostas = $alternativas[$int];
                echo "
                <div>
                    <h2>$enunciados[$int]</h2>
                    <input type=\"radio\" name=\"p$pergunta\" id=\"p$pergunta" . "a\">$repostas[0] <br>
                    <input type=\"radio\" name=\"p$pergunta\" id=\"p$pergunta" . "b\">$repostas[1] <br>
                    <input type=\"radio\" name=\"p$pergunta\" id=\"p$pergunta" . "c\">$repostas[2] <br>
                    <input type=\"radio\" name=\"p$pergunta\" id=\"p$pergunta" . "d\">$repostas[3] <br>
                </div>
                ";
            }
        ?>
    </div>
</body>
</html>