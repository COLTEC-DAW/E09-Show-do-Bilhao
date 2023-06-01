<?php

    class perguntas{

        public $question;
        public $answer = [];
        public $correctAnswer;


        public function __construct(string $r_question, array $r_answer, int $r_correctAnswer){
            $this->question = $r_question;
            $this->answer = $r_answer;  
        }

        function PrintQuestions(){

        }
    }

?>