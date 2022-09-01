<?php
    final class Questao{

        public $pergunta;
        public $alternativas;
        public $resposta;

        public function __construct($pergunta, $alternativas, $resposta){
            $this->pergunta = $pergunta;
            $this->alternativas = $alternativas;
            $this->resposta = $resposta;
        }
    }

?>