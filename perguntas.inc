<?php

    function carregaPergunta($id) {
        $perguntas = lePerguntas();
        global $alternativas;
        global $enunciados;

        echo "<h3 class='questao'>" . $enunciados[$id] . "</h3>";
        echo "<div class='options'>";
        for($i = 0; $i < 4; $i++) {
            echo "<input class='op' type='radio' name='resposta' value='". $i ."'> " . $alternativas[$id][$i] . "<br>";
        }
        echo "</div>";
        echo "<button type='submit'>Enviar</button>";
        echo "<p>Acertos: ". $id ."/5 </p>";

        fclose($perguntas);
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
        $arquivo = fopen("perguntas.json", "r");
        $array = [];
        $array = json_decode(fread($arquivo, filesize("perguntas.json")));
        return $array;
    }

    function verificaResposta($id) {
        $perguntas = lePerguntas();
        $respostas = [];

        foreach($perguntas as $pergunta) {
            
        }


        if ($_SERVER["REQUEST_METHOD"] === "POST") {
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

        fclose($perguntas);
    }
?>