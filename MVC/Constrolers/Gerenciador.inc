<?php
    require "MVC/Models/Pergunta.inc";

    class Gerenciador {
        // Atributos
        var $perguntas;
        var $pontuacao;

        // Construtor
        public function __construct() {
            // inicia array de perguntas
            $this->perguntas = [];
            $this->pontuacao = 0;

            $alternativasProvisorias = ["Alternativa a","Alternativa b","Alternativa c","Alternativa d","Alternativa e"];

            $this->perguntas[] = new Pergunta("Primeiro enunciado", $alternativasProvisorias, 0);
            $this->perguntas[] = new Pergunta("Segundo enunciado", $alternativasProvisorias, 0);
            $this->perguntas[] = new Pergunta("Terceiro enunciado", $alternativasProvisorias, 0);
            $this->perguntas[] = new Pergunta("Quarto enunciado", $alternativasProvisorias, 0);
            $this->perguntas[] = new Pergunta("Quinto enunciado", $alternativasProvisorias, 0);
            
        }
    
        public function carregaPergunta($id) {
            return $this->perguntas[0];
        }

        public function buscaAlternativaCorreta($id) {
            foreach($this->perguntas[$id]->alternativas as $alternativa) {
                if($alternativa->ehCorreta) {
                    return $alternativa->letra;
                }
            }
        }
    }
?>