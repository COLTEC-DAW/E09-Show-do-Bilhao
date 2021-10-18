<?php
    $perguntas = 
    [
        "Em qual ano ocorreu a Apollo 11, primeiro voo espacial a pousar na lua?",
        "O macarrão instantâneo foi inventado nos anos 1950, no Japão, por:",
        "Qual é o coletivo de cães?",
        "Quantos noves tem de 0 a 100?",
        "Qual o maior artilheiro da Champions League?"
    ];

    $alternativas = 
    [
        [
            "A) 1968",
            "B) 1969", 
            "C) 1970",
            "D) 1971"
        ],

        [
            "A) Shuji Nakamura",
            "B) Yoshiro Nakamatsu",
            "C) Fujio Masuoka",
            "D) Momofuku Ando"
        ],

        [
            "A) Alcateia",
            "B) Manada",
            "C) Matilha",
            "D) Rebanho"
        ],

        [
            "A) 10",
            "B) 11",
            "C) 19",
            "D) 20"
        ],

        [
            "A) Cristiano Ronaldo",
            "B) Lionel Messi",
            "C) Raúl González",
            "D) Ruud van Nistelrooy"
        ]
        ];

    $alternativasCorretas = [1, 3, 2, 3, 0];

    /*Eu estava fazendo para sortear a pergunta, mas perguntei para alguns colegas e li novamente
    as instruções e segundo o entendimento que tive, as perguntas deveriam ser feitas 
    na ordem em que estão pré-organizadas

    $perguntasQueJaForamFeitasIndices = array();
    $numeroDePerguntasFeitas = 1;
    $perguntaQueSeraMostrada;


    function sorteiaPergunta()
    {
        global $perguntasQueJaForamFeitasIndices, $perguntaQueSeraMostrada;

        $perguntaQueSeraMostrada = mt_rand(0,4);

        foreach($perguntasQueJaForamFeitasIndices as $elemento)
        {
            if($perguntaQueSeraMostrada == $elemento)
            {
                sorteiaPergunta();
            }
        }
        array_push($perguntasQueJaForamFeitasIndices, $perguntaQueSeraMostrada);
        return $perguntaQueSeraMostrada;
    }
    */

    $perguntaQueSeraMostrada = 0;

    function carregaPergunta($id)
    {
        global $perguntas, $alternativas, $alternativasCorretas;
        $string = "resposta";

        echo $perguntas[$id]."<br><br>";
        echo ("<form action ='http://localhost/DAW-E09/checandoRespostas.php' method = 'post' >

                <input type = 'checkbox' id='pergunta0' name = ".$string." value = 0>
                <label for = 'pergunta0'> ".$alternativas[$id][0]."</label><br>

                <input type = 'checkbox' id='pergunta1' name = ".$string." value = 1>
                <label for = 'pergunta1'> ".$alternativas[$id][1]."</label><br>

                <input type = 'checkbox' id='pergunta2' name = ".$string." value = 2>
                <label for = 'pergunta2'> ".$alternativas[$id][2]."</label><br>

                <input type = 'checkbox' id='pergunta3' name = ".$string." value = 3>
                <label for = 'pergunta3'> ".$alternativas[$id][3]."</label><br><br>

                <input type = 'image' src = 'http://localhost/DAW-E09/Imagens/submitButtom.png' alt='Submit' style = 'max-width:48px; max-height:48px;'>
                <input type = 'hidden' id = 'qualPergunta' name = 'pergunta' value = ".$id.">
                <input type = 'hidden' id = 'respostaCorreta' name = 'respostaCorreta' value = ".$alternativasCorretas[$id].">

            </form>");
    }

?>
