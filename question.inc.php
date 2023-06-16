<?php
    class Question
    {
        public static $_numQuest = 0;
        public static $_atQuestion = 0;
        public $id;
        public $question;
        public $answers = [];  
        private $correctAnswer;

        function __construct($id, $question, $answers, $correctAnswer)
        {
            $this->id = $id;
            $this->question = $question;
            $this->answers = $answers;
            $this->correctAnswer = $correctAnswer;
        }

        function ShowQuestion()
        {
            $nextId = $this->id + 1;
            echo '<div class="quest">';
            echo '<h1>' . $this->question . '</h1>';
            echo '<form action="/index.php" method="post">';
            for($i = 0; $i < count($this->answers); $i++)
            {
                $choice = $this->answers[$i];
                echo '<input type="radio" id="'. $this->id .'" name="answer" value="'. chr($i+97).' ">';
                echo '<label for="'. $this->id .'"> '. $choice .' </label><br>';
            }
            echo '<input type="hidden" name="next_id" value="'. $nextId.'">';
            echo '<input class="submit-btn" type="submit" value="Responder">';
            echo '</form>';
            echo '</div>';
        }

        function ShowProgress()
        {
            echo '<div class="bar">';
            echo '<h1>' . ($this->id+1) . ' de ' . (self::$_numQuest-1) . '</h1>';
            echo '</div>';
        }

        function CheckQuestion($answer)
        {
            if(trim($answer) == trim($this->correctAnswer))
                return true;
            else
                return false;
        }
    }
?>
