<?php

    $questions = array(
        "1) Quantas perguntas tem no jogo?",

        "2) Rei do pix: vai cem volta...?",

        "3) Qual o nome do maior jogador de BloonsTD6?",

        "4) Quem é o crack da putaria?",

        "5) Complete o nome: Gui marques ...",
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

            echo "<h3>"  . " $questions[$i]</h3>" . "\n \n";

            

            for ($j = 0; $j < 4; $j++) {

                

                if ($j == $answers[$i]) {

                    $options[$i][$j] = "<b>" . $options[$i][$j] . "</b>";

                }
                
                echo $options[$i][$j] . "\n";

            }

            echo "\n";
        }
    }

    function mostraPergunta($id){

        $pergunta = carregaPergunta($id);

        $enunciado = $pergunta["pergunta"];
        $alternativas = $pergunta["alternativas"];
        $resposta = $pergunta["resposta"];
        
        echo "<h3>" . " $enunciado </h3>";

        for ($j = 0; $j < count($alternativas); $j++) {
        
            if ($j == $resposta) {

             $alternativas[$j] = "<b>" . $alternativas[$j] . "</b>";

            }

        echo $alternativas[$j] . "\n";

        }
    }

    function loadQuestion($id)
    {

        global $questions, $options, $answers;

        if (!(is_numeric($id)) || $id == "-1" || $id >= count($questions)) {
            return false;
        }

        $pergunta = array(
            "pergunta" => $questions[$id],
            "alternativas" => $options[$id],
            "resposta" => $answers[$id]
        );

        return $pergunta;
    }



    function verificaID($id)
    {
        global $questions;

        if (!(is_numeric($id)) || $id == "-1" || $id >= count($questions)) {
            return false;
        }

        return true;
    }
?>
