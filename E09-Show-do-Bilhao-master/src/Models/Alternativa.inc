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
?>