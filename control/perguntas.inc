<?php

    function carregaPergunta($id) {
        $perguntas = lePerguntas();
        $enunciado = $perguntas[$id]->enunciado;
        $opcoes = $perguntas[$id]->opcoes;
        $pontuacao =  $_POST["pontuacao"];

        echo "<h3 class='questao'>" . $enunciado . "</h3>";
        echo "<div class='options'>";
        for($i = 0; $i < 4; $i++) {
            echo "<input class='op' type='radio' name='resposta' value='". $i ."'> " . $opcoes[$i] . "<br>";
        }
        echo "</div>";
        echo "<input type='hidden' name='pontuacao' value='". ($pontuacao+1) ."'>";
        echo "<button type='submit'>Enviar</button>";
        
        if(isset($_POST["pontuacao"])) {
            echo "<p>Acertos: ". $pontuacao ."/5 </p>";
        } else {
            echo "<p>Acertos: 0/5 </p>";
        }
    }

    function gameover($id, $resposta, $respostas) {
        $user = unserialize($_SESSION["user"]); 

        setcookie($user->login . "_ultimapontuacao", $_POST["pontuacao"], 0, "/");
        setcookie($user->login . "_ultimologin", date('d/m/Y H:i:s'), 0, "/");

        if ($_POST["pontuacao"] == 5 && ($resposta == $respostas[$id-1])) {
            echo "<p>Parabéns!</p> <p>Você Ganhou!</p>";
            echo "<p>Acertos: ". $_POST["pontuacao"] ."/5 </p>";
        } else {
            echo "<p>Você Perdeu!</p>";
            echo "<p>Acertos: ". ($_POST["pontuacao"]-1) ."/5 </p>";
            setcookie($user->login . "_ultimapontuacao", ($_POST["pontuacao"]-1), 0, "/");
        }
        echo "<a href='perguntas.php'>Recomeçar</a>";
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
                gameover($id, $resposta, $respostas);
            }
            
        } else {
            if ($id < 5) {
                carregaPergunta($id);
            } else {
                gameover($id, "", $respostas);
            }
        }
    }
?>