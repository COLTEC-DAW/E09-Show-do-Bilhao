<?php
    class Question{
        public $question;
        public $options;
        public $answer;

        public function __construct($question, $options, $answer){
            $this->question = $question;
            $this->options = $options;
            $this->answer = $answer;
        }    
    }

?>