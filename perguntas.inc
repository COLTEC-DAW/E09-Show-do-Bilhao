<?php
    $perguntas = array("Quais são as fases da Lua? <br/>", 
                            "Qual a montanha mais alta do mundo? <br/>", 
                            "Onde se localiza Machu Picchu? <br/>",
                            "Que país tem o formato de uma bota? <br/>",
                            "Quantos ossos temos no nosso corpo? <br/>");

    $opcoes = array(("1) Nova, cheia e superlua <br/>
                            2) Penumbral, lunar parcial, lunar total e cheia <br/>
                            3) Nova, cheia, minguante e lua de sangue <br/>
                            4) Nova, crescente, cheia e minguante <br/> <br/>"),
                            ("1) Mauna Kea <br/>
                            2) Dhaulagiri <br/>
                            3) Monte Chimborazo <br/>
                            4) Monte Everest <br/> <br/>"),
                            ("1) Colômbia <br/>
                            2) Peru <br/>
                            3) Bolívia <br/>
                            4) Índia <br/> <br/>"),
                            ("1) Itália <br/>
                            2) Brasil <br/>
                            3) Portugal <br/>
                            4) México <br/> <br/>"),
                            ("1) 126 <br/>
                            2) 100 <br/>
                            3) 206 <br/>
                            4) 300 <br/> <br/>"));

    $respostas = array(3, 3, 1, 0, 2);
    

    function carregaPergunta($id){
        global $perguntas;
        global $opcoes;
        global $respostas;

        for($index = $id; $index <= $id; $index++){
            echo($perguntas[$index]);
            echo("<br/>");
            echo($opcoes[$index]);
            echo("<br/>");
            $var = $respostas[$index];
            $var = $var + 1;
            echo("Resposta: $var");
            echo("<br/> <br/> <br/> <br/> <br/> <br/>");
        }
    }

?>