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
        return $perguntas[$id];
    }

    function verificaPergunta($id, $resp_usuario){
        echo $resp_usuario;
        $resposta = carregaPergunta($id);
        echo $resposta->resposta;
        echo $id;
        
        if($resp_usuario == $resposta->resposta){
        return $id+1;
        } else{
            return 6;
        } 
        
    }
?>