<?php
    class Perguntas{
        var $pergunta;
        var $alternativas;
        var $resposta;

        function Perguntas($pergunta, $alternativas, $resposta){
            $this->pergunta= $pergunta;
            $this->alternativas= $alternativas;
            $this->resposta= $resposta;
        }
    }

    $perg1=["resp1","resp2","resp3","resp4"];
    $perg2=["resp1","resp2","resp3","resp4"];
    $perg3=["resp1","resp2","resp3","resp4"];
    $perg4=["resp1","resp2","resp3","resp4"];
    $perg5=["resp1","resp2","resp3","resp4"];
    $alternativas=[$perg1, $perg2, $perg3, $perg4, $perg5];

    $p1 = new Perguntas("quest1", $alternativas[0], "1");
    $p2 = new Perguntas("quest2", $alternativas[1], "4");
    $p3 = new Perguntas("quest3", $alternativas[2], "3");
    $p4 = new Perguntas("quest4", $alternativas[3], "2");
    $p5 = new Perguntas("quest5", $alternativas[4], "1");

    $perguntas= [$p1,$p2,$p3,$p4,$p5];

    function carregaPergunta($id){
        global $perguntas;
        $resp_usuario = $_POST["pergunta"];
        $proxPag = $id + 1;
        $pergunta = $perguntas[$id]->pergunta;
        if($id != 0) {
            if($perguntas[$id-1]->resposta == $resp_usuario && $id<5) {
                echo "<div class='form'>";
                echo "<h2> $pergunta </h2>";
                echo "<form action='index.php?id=$proxPag' method='POST'>";
                for($i=1;$i<=4;$i++){
                    $alternativa = $perguntas[$id]->alternativas[$i-1];
                    echo "<div class='pergunta'>";
                    echo "<label> <input type='radio' name='pergunta' value='$i'> $alternativa </label>";
                    echo "</div>";
                }
                echo "<input class='pergunta' type='submit' name='resp'>";
            } elseif($id>4 && $perguntas[$id-1]->resposta == $resp_usuario){
                echo "<h2 class='resultado'> VENCEDOR!! </h2>";
            } else{
                echo "<h2 class='resultado'> GAME OVER </h2>";
            }
        }
        else {
            echo "<div class='form'>";
                echo "<h2> $pergunta </h2>";
                echo "<form action='index.php?id=$proxPag' method='POST'>";
                for($i=1;$i<=4;$i++){
                    $alternativa = $perguntas[$id]->alternativas[$i-1];
                    echo "<div class='pergunta'>";
                    echo "<label> <input type='radio' name='pergunta' value='$i'> $alternativa </label>";
                    echo "</div>";
                }
                echo "<input class='pergunta' type='submit' name='resp'>";
        }
    }
?>