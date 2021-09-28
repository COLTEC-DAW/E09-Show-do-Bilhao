
    <?php 
        define("NumeroPerguntas", 5);
        $Perguntas = array(
            "Pergunta1" => "Qual e o Nome do Presidente?",
            "Pergunta2" => "Qual Dia é comemorado a Independencia Do Brasil? ",
            "Pergunta3" => "Qual a O nome do evento ciêntifico que gerou o Universo?",
            "Pergunta4" => "A Tensão Elétrica é medida em?",
            "Pergunta5" => "Qual o nome da memoria mais rápida em um computador, localizada no processador"
        );

        $Respostas = array(
            "Pergunta1" => array(
                "A" => "Lula",
                "B" => "Dilma",
                "C" => "Temer",
                "D" => "Bolsonaro"
            ),
            "Pergunta2" => array(
                "A" => "1 De Novembro",
                "B" => "10 De Outubro",
                "C" => "7 Setembro",
                "D" => "30 Setembro",
            ),
            "Pergunta3" => array(
                "A" => "Criação",
                "B" => "Evolução",
                "C" => "Big Bang",
                "D" => "Neymar",
            ),
            "Pergunta4" => array(
                "A" => "Watts",
                "B" => "Volts",
                "C" => "Energia",
                "D" => "Ampêres"
            ),
            "Pergunta5" => array(
                "A" => "Disco Rigido",
                "B" => "RAM",
                "C" => "HD",
                "D" => "Cache"
            ),
        );

        $Certo = array(
            "Pergunta1" => "D",
            "Pergunta2" => "C",
            "Pergunta3" => "C",
            "Pergunta4" => "B",
            "Pergunta5" => "D",
        );

        for ($i = 1; $i <= NumeroPerguntas;$i++){
            echo $Perguntas["Pergunta$i"];
            echo "\n\n<br><br>";
            echo "A:",$Respostas["Pergunta$i"]["A"];
            echo "\n<br>";
            echo "B:",$Respostas["Pergunta$i"]["B"];
            echo "\n<br>";
            echo "C:",$Respostas["Pergunta$i"]["C"];
            echo "\n<br>";
            echo "D:",$Respostas["Pergunta$i"]["D"];
            echo "\n\n<br><br>";

                }
    ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
    </body>
    </html>
