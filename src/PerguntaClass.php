<?php

class Pergunta{


    private $enunciado;
    private $opcoes = array();
    private $gabarito;

    public function __construct($pergunta, $opcoes, $gabarito){

        $this->enunciado = $pergunta;

        $this->opcoes = $opcoes;
        
        $this->gabarito = $gabarito;

    }

    public function PegarPergunta() {
        return $this->enunciado;
    }

    public function PegarResposta() {
        return $this->gabarito;
    }

    public function PegarOpcoes() {
        return $this->opcoes;
    }


    static function CarregaPergunta($id) {

        $ArqJson = file_get_contents("ArquivoQuestions.json");
        $decode = json_decode($ArqJson, true);
        
        if ($id >= count($decode["perguntas"])) {
            return false;
        }else{
            $pergunta = new Pergunta(
            $decode["perguntas"][$id]["enunciado"],
            $decode["perguntas"][$id]["opcoes"],
            $decode["perguntas"][$id]["gabarito"]
            );
        }

        return $pergunta;
    }
}

?> 