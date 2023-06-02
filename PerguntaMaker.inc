<?php
    require "Pergunta.inc";

    class PerguntaMaker {
        // Atributos
        public $perguntas;

        // Construtor
        public function __construct() {
            // inicia array de perguntas
            $this->perguntas = [];

            $alternativasProvisorias = ["Alternativa a","Alternativa b","Alternativa c","Alternativa d","Alternativa e"];

            $this->perguntas[] = new Pergunta("Primeiro enunciado", $alternativasProvisorias, 0);
            $this->perguntas[] = new Pergunta("Segundo enunciado", $alternativasProvisorias, 0);
            $this->perguntas[] = new Pergunta("Terceiro enunciado", $alternativasProvisorias, 0);
            $this->perguntas[] = new Pergunta("Quarto enunciado", $alternativasProvisorias, 0);
            $this->perguntas[] = new Pergunta("Quinto enunciado", $alternativasProvisorias, 0);
            
        }
    }
?>