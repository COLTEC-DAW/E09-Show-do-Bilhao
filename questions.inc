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



    function mostraPergunta($id){

        $pergunta = loadQuestion($id);

        $enunciado = $pergunta["pergunta"];
        $alternativas = $pergunta["alternativas"];
        $resposta = $pergunta["resposta"];
        
        echo "<h3>" . " $enunciado </h3>";

        echo "<form action = 'resposta.php' method = 'post'>";

        for ($j = 0; $j < count($alternativas); $j++) {

            echo ("<input type = 'radio' id=". $j ." name = 'option' value=" .$j. ">
                <label for = ".$j."> ".$alternativas[$j]."</label><br>");

            
        
        }

        echo "<br>";
        echo "<input type = 'hidden' name = 'id' value = '$id'>";
        echo "<input type = 'hidden' name = 'resposta' value = ".$pergunta['resposta'].">";
        echo "<input type = 'submit' value='Enviar'>";
        echo "<br><br><br><br>";
        echo "</form>";

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
