<?php
    /**
     * Summary of perguntas
     */
    class Perguntas{

        public $question;
        public $answer = [];
        public $correctAnswer;

        public $num, $questionNum;


        public function __construct(string $json_question, array $json_answer, int $json_correctAnswer){
            $this->question = $json_question;
            $this->answer = $json_answer;
            $this->correctAnswer = $json_correctAnswer;  
            $this->num = $this->questionNum = 0;
        }

        public function PrintQuestions(){
            global $question, $questionNum;
            foreach($question as $q){
                echo "$questionNum)" . $q->questions;
                $this->PrintAnswers();
                $questionNum++;
            }
        }

        public function PrintAnswers(){
            $num = 0;
            global $answer;
            foreach($answer as $a){
                echo "$num)" . $a->answers[$num];
                $num++;
            }
        }
    }

?>