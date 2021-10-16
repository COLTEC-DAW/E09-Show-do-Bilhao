<?php
    class Pergunta{

        var $enunciado;
        var $alternativas;
        var $resposta;

        public function __construct ($enunciado, $alternativas, $resposta){

            $this->enunciado = htmlspecialchars($enunciado);

            for ($i = 0; $i < count($alternativas); $i++){
                $alternativas[$i] = htmlspecialchars($alternativas[$i]);
            }

            $this->alternativas = $alternativas;
            $this->resposta = htmlspecialchars($resposta);
        }
    }
?>