<?php

class Questions
{
    private $storage = "partials/perguntas.json";
    private $stored_questions;

    // public function load_question($id)
    // {

    //     return array(
    //         "question" => $this->questions[$id],
    //         "options" => $this->options[$id],
    //         "answer" => $this->answers[$id]
    //     );
    // }
    public function load_question($id){
        return $this->stored_questions[0]['questions'][$id];
    }
    public function load_option($id){
        return $this->stored_questions[1]['options'][$id];
    }
    public function load_answer($id){
        return $this->stored_questions[2]['answers'][$id];
    }

    public function __construct()
    {
        $this->stored_questions = json_decode(file_get_contents($this->storage), true);
    }
    
}
