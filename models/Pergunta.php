<?php
    class Pergunta{

        var $enunciado;
        var $alternativas;
        var $resposta;

        public function __construct ($enunciado, $alternativas, $resposta){

            $this->enunciado = $enunciado;
            $this->alternativas = $alternativas;
            $this->resposta = $resposta;
        }

    }
?>