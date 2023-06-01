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
    }
?>
