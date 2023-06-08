<?php
    require "../src/Models/ModelsLoad.inc";
    require "../config/Game.inc";


    function loadQuestion(int $id){
        global $game;
        return $game->questions[$id];
    }

    function questionToHtml($id){
        global $game;
        $question = loadQuestion($id);
        
        echo "<h2>$question->enunciado</h2>";
        echo "<input type='hidden' name='currentQuestionId' value='$id' />";
        echo "<input type='hidden' name='PlayerScore' value='$game->score' />";

        foreach($question->alternativas as $alternativa){
            echo "<input type='radio' name='selectOption' value='$alternativa->letter' />";
            echo "<span>[$alternativa->letter] $alternativa->enunciado</span> <br/>";
        }
        
        echo "<input type='submit' value='Responder'>";
    }

    function loadCurrentQuestion(){
        $questionId = $_POST["currentQuestionId"];
        if($questionId != null){
            questionToHtml($questionId);
        }else{
            echo("<h1>Something went wrong!</h1>");
            echo("<button><a href='index.php'>Go home</a></button>");
        }
    }

    function loadLoseScreen(){
        global $game;
        echo("<h1>Sorry, você errou!</h1>");
        echo("<p>Voce acertou: $game->score</p>");
        echo("<button><a href='index.php'>Go home</a></button>");
    }

    function validadeAnswer(){
        if(!empty($_POST["selectOption"])){
            $question = loadQuestion($_POST["currentQuestionId"]);

            if($question->alternativaCertaLetter == $_POST["selectOption"]){
                global $game;
                $game->score++;
                
                if($game->score == count($game->questions)){
                    //TODO: fazer uma tela de vitória
                    echo"<h1>Você chegou ao fim!</h1>";
                    return;
                }

                $_POST["PlayerScore"] = $game->score;
                $_POST["currentQuestionId"]++;
                
                loadCurrentQuestion();
            }else{
                loadLoseScreen();
            }
        }else{
            loadCurrentQuestion();
        }
    }
?>