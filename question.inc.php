<?php
    class Question
    {
        private static $_numQuest = 0;
        public $id;
        public $question;
        public $answers = [];  
        private $correctAnswer;

        function __construct($question, $answers, $correctAnswer)
        {
            $this->id = self::$_numQuest;
            self::$_numQuest++;
            $this->question = $question;
            $this->answers = $answers;
            $this->correctAnswer = $correctAnswer;
        }

        function ShowQuestion()
        {
            echo '<div class="quest">';
            echo '<h1>' . $this->question . '</h1>';
             for($i = 0; $i < count($this->answers); $i++)
             {
                 $choice = $this->answers[$i];
                 echo '<input type="radio" id="'. $this->id .'" name="'. $this->id .'" value="'. $i .' ">';
                 echo '<label for="'. $this->id .'"> '. $choice .' </label><br>';
             }
             echo '</div>';
        }
    }
?>
