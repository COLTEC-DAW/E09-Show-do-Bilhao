<?php
     function loadQuestion(int $id){
        global $game;
        return $game->questions[$id];
    }

    function questionToHtml($id){
        $question = loadQuestion($id);
        echo "<h2>$question->enunciado</h2>";
        foreach($question->alternativas as $alternativa){
            echo "<input type='radio' name='selectOption'/>";
            echo "<span>[$alternativa->letter] $alternativa->enunciado</span> <br/>";
        }
    }

    function loadCurrentQuestion(){
        if(!empty($_GET["currentQuestionId"])){
            $currentQuestionId = $_GET["currentQuestionId"];
            questionToHtml($currentQuestionId);
        }else{
            $currentQuestionId = 0;
            questionToHtml($currentQuestionId);
        }
    }
?>