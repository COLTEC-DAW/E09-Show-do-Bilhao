<?php
    require "./src/Models/ModelsLoad.inc";
    require "./config/Game.inc";
    
    //Saving the last score and last time played of the user
    if(isset($_POST["selectOption"]) && isset($_POST["currentQuestionId"])){
        $question = loadQuestion($_POST["currentQuestionId"]);

        // If user lose the game
        if($question->alternativaCertaLetter != $_POST["selectOption"]){
            setcookie('lastScore', strval($game->score));
            setcookie('lastTimePlayed', strval(date('d/m/Y')));
        
        }// If user win the game
        elseif(($game->score + 1) == count($game->questions)){
            // score + 1 because the add occur in loadScreen() function
            setcookie('lastScore', strval($game->score + 1));

            setcookie('lastTimePlayed', strval(date('d/m/Y')));
        }
    }

    function loadQuestion(int $id){
        global $game;
        return $game->questions[$id];
    }

    function loadCurrentQuestion(){
        if(isset($_POST["currentQuestionId"])){
            include "./templates/questionTemplate.inc";
        }else{
            echo("<h1>Something went wrong!</h1>");
            echo("<button><a href='index.php'>Go home</a></button>");
        }
    }

    function loadScreen(){
        if(isset($_POST["selectOption"])){
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
                $game->currentQuestionId = $_POST["currentQuestionId"];

                loadCurrentQuestion();
                
            }else{
                include "./templates/loseScreenTemplate.inc";
            
            }

        }else{
            loadCurrentQuestion();
        }
    }
?>