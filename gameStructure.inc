<?php
    class Alternativa{
        public $letter;
        public $enunciado;

        public function __construct($l, $enun) {
            $this->letter = $l;
            $this->enunciado = $enun;
        }
    }

    class Question{
        public $enunciado;
        public $alternativas;
        public $alternativaCertaIndex;
    }

    class Game{
        public $questions;
        public $currentQuestionId = 0;
        public $score = 1;
    }
?>