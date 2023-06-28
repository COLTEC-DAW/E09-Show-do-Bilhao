<?php
    
    class Pergunta{
        public $enunciado;
        public $alternativas;
        public $gabarito;


        public function __construct($enum, $alter, $gab){
            $this->enunciado = $enum;
            $this->alternativas = $alter;
            $this->gabarito = $gab;
        }

    }



    function carregaPergunta($id){
        
        $perguntasJson = file_get_contents("perguntas.json");
        $perguntas = json_decode($perguntasJson, true);

        $pergunta = new Pergunta($perguntas[$id]["enunciado"], $perguntas[$id]["alternativas"], $perguntas[$id]["gabarito"]);

        return $pergunta;

    }

    function retornaGabarito(){
        $perguntasJson = file_get_contents("perguntas.json");
        $perguntas = json_decode($perguntasJson, true);

        $gabarito = [];

        foreach($perguntas as $pergunta){
            array_push($gabarito, $pergunta["gabarito"]);
        
        }

        return $gabarito;
    }

?>