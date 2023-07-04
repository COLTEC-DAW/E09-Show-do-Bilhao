<?php
    class Perguntas{
        var $pergunta;
        var $alternativas;
        var $resposta;

        function __construct($pergunta, $alternativas, $resposta){
            $this->pergunta= $pergunta;
            $this->alternativas= $alternativas;
            $this->resposta= $resposta;
        }
    }

    function carregaPergunta($id){
        $arquivo = file_get_contents("./json/perguntas.json");
        $perguntas = json_decode($arquivo, true);
        $pergunta = new Perguntas($perguntas[$id]["pergunta"], $perguntas[$id]["alternativas"], $perguntas[$id]["resposta"]);
        return $pergunta;
    }

    function verificaPergunta($id, $resp_usuario){
        $resposta = carregaPergunta($id-1);
        if($resp_usuario == $resposta->resposta){
            return true;
        } else{
            return false;
        } 
    }
?>