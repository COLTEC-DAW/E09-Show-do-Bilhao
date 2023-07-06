<?php
    require "Alternativa.inc";

    class Pergunta{
        // Atributos
        var $enunciado;
        var $alternativas;
        
        // Construtor
        public function __construct($textoEnunciado, $textosAlternativas) {
            $this->enunciado = $textoEnunciado;
            $this->alternativas = [];

            $letras = range('a','z');
            $contAlternativa = 0;

            foreach($textosAlternativas as $alternativa) {
                // Adiciona pergunta na ultima posição do array
                $this->alternativas[] = new Alternativa($letras[$contAlternativa], $alternativa["resposta"], $alternativa["ehCorreta"]);
                
                $contAlternativa++;
            }
        }
    }
?>