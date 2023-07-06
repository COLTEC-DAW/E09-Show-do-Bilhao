<?php
    class Alternativa{
        // Atributos
        var $letra;
        var $resposta;
        // Booleano que fala se é ou não a alternativa certa
        public $ehCorreta;

        // Construtor
        public function __construct($letra, $resposta, $ehCorreta) {
            $this->letra = $letra;
            $this->resposta = $resposta;
            $this->ehCorreta = $ehCorreta;
        }
    }
?>