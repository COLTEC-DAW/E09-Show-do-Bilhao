<?php 

        define("NumeroPerguntas", 5);
        define("zerado", 0);


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
         
        function gameOver(){
            //zera a poontuação
            $_POST["pontuacao"] = zerado;
            header('Location: /gameOver.php');
        }
        //Se existe a pergunta printa ela na tela do USER
        if(isset($_POST["id"])){

        echo "Pontuação:", $_POST["pontuacao"], "<br>";
        $Pergunta = carregaPergunta($_POST["id"]);
        echo $Pergunta["Pergunta"], "\n\n<br><br>";
        echo "A:",$Pergunta["Respostas"]["A"], "\n<br>";
        echo "B:",$Pergunta["Respostas"]["B"], "\n<br>";
        echo "C:",$Pergunta["Respostas"]["C"], "\n<br>";
        echo "D:",$Pergunta["Respostas"]["D"], "\n<br>";      
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
        <form action="Perguntas.php" method="POST">
            <input type="text" name="resposta">

            <input type="hidden" name="id" value
            = <?php 
            $Resposta = intval($_POST["id"])+1;
            if($Resposta <= NumeroPerguntas){
            echo $Resposta;
            }else{
                echo 1;
            }
            ?>
            >

            <input type="hidden" name = "pontuacao" value = <?php
             if((intval($_POST["id"])-1) > 0){
             $Pergunta2 = carregaPergunta(intval($_POST["id"])-1);
                if($Pergunta2["RespostaCerta"] == strtoupper($_POST["resposta"])){ 
                  echo intval($_POST["pontuacao"])+1;  
                }else{
                    gameOver();
                }
             }else{
                 //Pontuação será igual a zero
                 echo 1; 
             }
            ?>
            >

            <input type="submit">

        </form>
        <form action="Logout.php" method="GET">
            <input type="submit" value="Sair">
        </form>
        <form action="Menu.php" method="GET">
            <input type="submit" value="Menu">
        </form>

    </body>
    </html>