<?php

    function carregaPergunta($id) {
        $perguntas = lePerguntas();
        $enunciado = $perguntas[$id]->enunciado;
        $opcoes = $perguntas[$id]->opcoes;

        echo "<h3 class='questao'>" . $enunciado . "</h3>";
        echo "<div class='options'>";
        for($i = 0; $i < 4; $i++) {
            echo "<input class='op' type='radio' name='resposta' value='". $i ."'> " . $opcoes[$i] . "<br>";
        }
        echo "</div>";
        echo "<button type='submit'>Enviar</button>";
        echo "<p>Acertos: ". $id ."/5 </p>";
    }

    function gameover($id) {
        if ($id == 5) {
            echo "<p>Parabéns!</p> <p>Você Ganhou!</p>";
            echo "<p>Acertos: ". $id ."/5 </p>";
        } else {    
            echo "<p>Você Perdeu!</p>";
            echo "<p>Acertos: ". ($id - 1) ."/5 </p>";
        } 
    }
    
    function lePerguntas() {
        $arquivo = fopen("json/perguntas.json", "r");
        $array = [];
        $array = json_decode(fread($arquivo, filesize("json/perguntas.json")));
        fclose($arquivo);
        return $array;
    }

    function verificaResposta($id) {
        $perguntas = lePerguntas();
        $respostas = [];

        foreach($perguntas as $pergunta) {
            array_push($respostas, $pergunta->resposta);
        }

        if ($_SERVER["REQUEST_METHOD"] === "POST" && $id!=0) {
            if(isset($_POST["resposta"])) {
                $resposta = htmlspecialchars($_POST["resposta"]);
            } else {
                $resposta = "";
            }

            // primeira pergunta ou acertou a anterior
            if($id < 5 && ($resposta == $respostas[$id-1])) {
                carregaPergunta($id);
            } else {
                gameover($id);
            }
            
        } else {
            if ($id < 5) {
                carregaPergunta($id);
            } else {
                gameover($id);
            }
        }
    }
?>