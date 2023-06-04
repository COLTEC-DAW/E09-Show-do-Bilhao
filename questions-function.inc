<?php
     function loadQuestion(int $id){
        global $game;
        return $game->questions[$id];
    }

    function questionToHtml($id){
        $question = loadQuestion($id);
        echo "<h2>$question->enunciado</h2>";
        echo "<input type='hidden' name='currentQuestionId' value='$id' />";
        foreach($question->alternativas as $alternativa){
            echo "<input type='radio' name='selectOption' value='$alternativa->id' />";
            echo "<span>[$alternativa->letter] $alternativa->enunciado</span> <br/>";
        }
    }


    function loadCurrentQuestion(){
        if($_POST["currentQuestionId"] != null){
            $questionId = $_POST["currentQuestionId"];
            $question = loadQuestion($questionId);
            if($_POST["selectOption"] == $question->alternativaCertaIndex){
                if($questionId < 5){
                    $questionId++;
                }
                questionToHtml($questionId);
            }
        }elseif(!empty($_GET["currentQuestionId"])){
            $currentQuestionId = $_GET["currentQuestionId"];
            questionToHtml($currentQuestionId);
        }else{
            $currentQuestionId = 0;
            questionToHtml($currentQuestionId);
        }
    }
?>