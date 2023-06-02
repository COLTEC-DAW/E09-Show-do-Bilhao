<?php

    /**
     * Summary of perguntas
     */
    class Perguntas{

        public $question = [];
        public $answer = [];
        public $correctAnswer;

     


        public function __construct(string $json_question, array $json_answer, int $json_correctAnswer){
            $this->question = $json_question;
            $this->answer = $json_answer;
            $this->correctAnswer = $json_correctAnswer;  

        }
        
        public function PrintAnswers(){

            global $answer;
            $num = 0;
            
            echo "<div style='margin-left:30px;'>"; 
    
            foreach($this->answer as $a){
                echo $num+1 . ")" . $a . "<br/>";
                $num++;
            }

            echo "</div><br/>";
        }
        
        function PrintQuestions(int $id){
            echo "<b>" . $id+1 . "-" . $this->question . "<b/><br/>";
            $this->PrintAnswers();
        }

    }

?>