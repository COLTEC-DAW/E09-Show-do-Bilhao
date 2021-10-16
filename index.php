<?php 


    $questions = array(
        "Quantas perguntas tem no jogo?",

        "Rei do pix: vai cem volta...?",

        "Qual o nome do maior jogador de BloonsTD6?",

        "Quem é o crack da putaria?",

        "Complete o nome: Gui marques ...",
    );


    $options =  array(

            array(

            "A: 3",
            "B: 4",
            "C: 6",
            "D: 5",

            ),

            array(

            "A: 1000",
            "B: 50",
            "C: 200",
            "D: Nada por conta de golpe",

            ),

            array(

            "A: Pedro ping",
            "B: Buzz Ligthyear",
            "C: LGL",
            "D: Gaules",

            ),

            array(

            "A: Gui marques",
            "B: Mc rick",
            "C: Gordão do PC",
            "D: Paulo Cardoso",

            ),

            array(

            "A: canalhão",
            "B: cadeludo",
            "C: maladeza",
            "D: MC",

            )          
    );

    $answers = array(3,3,1,2,0);

    function mostraPerguntas(){

        global $questions, $options, $answers;
        $j = 0;
        
        for ($i = 0; $i < count($questions); $i++) {

            echo "<h3>" . ($i + 1) . ": $questions[$i]</h3>" . "\n \n";

            

            for ($j = 0; $j < 4; $j++) {

                

                if ($j == $answers[$i]) {

                    $options[$i][$j] = "<b>" . $options[$i][$j] . "</b>";

                }
                
                echo $options[$i][$j] . "\n";

            }

            echo "\n";
        }
    }


?>

<!DOCTYPE html>
    <html lang="en">
    <head>

        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>Show do Real</title>

    </head>

    <body class = "container">

        <div class = "col_12">

            <h1>Perguntas:</h1>
            <div class = "perguntas">

                <?php

                    mostraPerguntas();

                ?>

            </div>

        </div>    

    </body>

</html> 

