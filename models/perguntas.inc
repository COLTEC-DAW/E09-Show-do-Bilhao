<?php
    class Perguntas{
        public $enunciado;
        public $alternativas;
        public $resposta;
        
        function __construct($enunciado, $alternativas, $resposta)
        {
            $this->enunciado = $enunciado;
            $this->alternativas = $alternativas;
            $this->resposta = $resposta;
        }

        public static function carregaPergunta($id)
        {
            $pergunta = (array) json_decode(file_get_contents(__DIR__ . "/db/perguntas.json"))[$id];
            return new Perguntas($pergunta["enunciado"], $pergunta["alternativas"], $pergunta["resposta"]);
        }

        public static function getTotalPerguntas(){
            $perguntas = (array) json_decode(file_get_contents(__DIR__ . "/db/perguntas.json"));
            return sizeof($perguntas);
        }
    }
?>