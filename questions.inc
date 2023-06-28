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
        
        public function PrintAnswers($id){

            echo "<div style='margin-left:30px;'>";
            echo "<form action='' method='post'>"; 
            echo "<input type ='hidden' name='idQuestion' value='$id'>";
            echo "<input type ='hidden' name='Score' value='$id'>";
    
            foreach($this->answer as $index => $a){
                echo "<input id='option-$index' type ='radio' name='answer' value='$index'>";
                echo "<label for='option-$index'>$a</label>" . "<br/>";
            }

            echo "<input type = 'submit' value = 'Submit' />";
            echo "</form>";

            echo "</div><br/>";
        }
        
        function PrintQuestions($id){
            if($id < 5){
                echo "<b>" . $id+1 . "-" . $this->question . "<b/><br/>";
                
                $this->PrintScore();
                
                $this->PrintAnswers($id);
            }
        }

        function PrintScore(){
            if(isset($_POST["Score"])){
                echo "<p>Pontuação:" . $_POST["Score"] .  "</p>";
            }
        }

        function PrintEndGame(){
            
            $this->PrintScore();
            echo "<a href='login.php'>voltar ao inicio</a>";
        }


    }

?>