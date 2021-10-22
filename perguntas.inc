<?php
    class Question
    {
        var $enunciado;
        var $alternativas = array();
        var $alternativaCorreta;
        
        //Por padrao é public (documetação de visibilidade em "https://www.php.net/manual/pt_BR/language.oop5.visibility.php")
        function __construct($enunciadoVar, $alternativasVar, $alternativaCorretaVar)
        {
            $this->enunciado = $enunciadoVar;
            $this->alternativas = $alternativasVar;
            $this->alternativaCorreta = $alternativaCorretaVar;
        }
    }

    //Salva os dados do arquivo "perguntas.json" em um array de objetos
    $fileJSON = file_get_contents("http://localhost/DAW-E09/perguntas.json");
    $perguntasFILE = json_decode($fileJSON);
    $perguntasArray = array();
    for ($i = 0; $i < count($perguntasFILE); $i++)
    {
        $question = new Question($perguntasFILE[$i]->enunciado, $perguntasFILE[$i]->alternativas, $perguntasFILE[$i]->alternativaCorreta);
        array_push($perguntasArray, $question);
    }

    function carregaPergunta($id)
    {
        global $perguntasArray;
        $string = "resposta";
        echo $perguntasArray[$id]->enunciado;
        echo "<br><br>";

        echo ("<form action ='http://localhost/DAW-E09/checandoRespostas.php' method = 'post' >

                <input type = 'checkbox' id='pergunta0' name = ".$string." value = 0>
                <label for = 'pergunta0'> ".$perguntasArray[$id]->alternativas[0]."</label><br>

                <input type = 'checkbox' id='pergunta1' name = ".$string." value = 1>
                <label for = 'pergunta1'> ".$perguntasArray[$id]->alternativas[1]."</label><br>

                <input type = 'checkbox' id='pergunta2' name = ".$string." value = 2>
                <label for = 'pergunta2'> ".$perguntasArray[$id]->alternativas[2]."</label><br>

                <input type = 'checkbox' id='pergunta3' name = ".$string." value = 3>
                <label for = 'pergunta3'> ".$perguntasArray[$id]->alternativas[3]."</label><br><br>

                <input type = 'image' src = 'http://localhost/DAW-E09/Imagens/submitButtom.png' alt='Submit' style = 'max-width:48px; max-height:48px;'>
                <input type = 'hidden' id = 'qualPergunta' name = 'pergunta' value = ".$id.">
                <input type = 'hidden' id = 'respostaCorreta' name = 'respostaCorreta' value = ".$perguntasArray[$id]->alternativaCorreta.">

            </form>");
    }

?>
