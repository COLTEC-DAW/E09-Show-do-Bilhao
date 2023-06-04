<?php
    class Alternativa{
        public $id;
        public $letter;
        public $enunciado;

        public function __construct($id, $l, $enun) {
            $this->id = $id;
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