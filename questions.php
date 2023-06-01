<?php

    /**
     * Summary of perguntas
     */
    class perguntas{

        public $question = [];
        public $answer = [];
        public $correctAnswer;

        public $num, $questionNum;


        public function __construct(string $json_question, array $json_answer, int $json_correctAnswer){
            $this->question = $json_question;
            $this->answer = $json_answer;
            $this->correctAnswer = $json_correctAnswer;  
            $this->$num = $this->questionNum = 0;
        }

        public function PrintQuestions(){
            foreach($question as $q){
                echo "$questionNum" . $q->questions[$questionNum];
                PrintAnswers();
                $questionNum++;
            }
        }

        public function PrintAnswers(){
            $num = 0;
            foreach($answer as $a){
                echo "$num)" . $a->answers[$num];
                $num++;
            }
        }
    }

?>