<?php 

        define("NumeroPerguntas", 5);


        function carregaPergunta ($id){
            
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

        $Certa = array(
            "Pergunta1" => "D",
            "Pergunta2" => "C",
            "Pergunta3" => "C",
            "Pergunta4" => "B",
            "Pergunta5" => "D",
        );

        $Pergunta = array(
            "Pergunta" => $Perguntas["Pergunta$id"],
            "Respostas" => $Respostas["Pergunta$id"],
            "RespostaCerta" => $Certa["Pergunta$id"]
        );

        return $Pergunta;
        }  
         
        if(isset($_GET["id"])){
        $Pergunta = carregaPergunta($_GET["id"]);
        echo $Pergunta["Pergunta"], "\n\n<br><br>";
        echo "A:",$Pergunta["Respostas"]["A"], "\n<br>";
        echo "B:",$Pergunta["Respostas"]["B"], "\n<br>";
        echo "C:",$Pergunta["Respostas"]["C"], "\n<br>";
        echo "D:",$Pergunta["Respostas"]["D"], "\n<br>";      
        }
    ?>