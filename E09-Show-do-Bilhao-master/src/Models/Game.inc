<?php
    class Game{
        public $questions;
        public $currentQuestionId = 0;
        public $score = 0;
        public $userName;

        public function __construct($sc) {
            $this->score = $sc;
        }

        function getCurrentQuestion(){
            return $this->questions[$this->currentQuestionId];
        }
    }
?>