<?php namespace Models;
    class Game{
        private $questions_order; 
        private $count_questions; 
        private $correct_answers;
        private $current_ID;
        var $currently_playing;
        var $quantity_ID;   
        var $past_questions = [];

        function randomID($min = 1){
            $ids = range($min, $this->quantity_ID);
            shuffle($ids);
            
            foreach($ids as $id){
                if(!(in_array($id, $this->past_questions))){
                    return $id;
                }
            }
        }

        function __construct($quantity_questions, $id = 1)
        {
            $this->quantity_ID = $quantity_questions;
            $this->correct_answers = 0;
            $this->count_questions = 0;
            $this->current_ID = $id;
            $this->currently_playing = false;
            array_push($this->past_questions, $this->current_ID);
        }

        function getPoints(){
            return $this->correct_answers;
        }

        function updatePoints(){
            $this->correct_answers++;
        }

        function updateCount(){
            $this->count_questions++;
            $this->current_ID = $this->randomID();
            array_push($this->past_questions, $this->current_ID);
        }
        
        function getPastQuestionID(){
            return $this->past_questions[sizeof($this->past_questions) - 2];
        }

        function getCurrentQuestionID(){
            return $this->current_ID;
        }

        function getRequest(){
            return 'questions.php?question='. $this->current_ID;
        }

        function getCount(){
            return $this->count_questions;
        }
    }
?>