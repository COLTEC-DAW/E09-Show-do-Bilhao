<?php
    include "Alternativa.inc"

    class Pergunta{
        // Atributos
        $enunciado;
        $alternativas;
        
        // Construtor
        public function __construct($textoEnunciado, $textosAlternativas, $indexResposta) {
            $this->enunciado = $textoEnunciado;
            $this->alternativas = [];

            $letras = range('a','z');
            $contAlternativa = 0;

            foreach($textosAlternativas as $alternativa) {
                $this->alternativas[] = new Alternativa($letras[$contAlternativa], $textosAlternativas[$contAlternativa], false);

                $contAlternativa++;
            }

            // Define a alternativa certa de acordo com o index
            $this->alternativas[$indexResposta]->ehCorreta = true;
        }
    }
?>