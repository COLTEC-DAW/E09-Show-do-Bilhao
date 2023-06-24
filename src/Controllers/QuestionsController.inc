<?php
    require "./src/Models/ModelsLoad.inc";
    require "./config/Game.inc";
    
    $loseGame = false;

    //Saving the last score and last time played of the user
    if(isset($_POST["selectOption"]) && isset($_POST["currentQuestionId"])){
        $question = loadQuestion($_POST["currentQuestionId"]);

        $user = unserialize($_SESSION['user']);
        // If user lose the game
        if($question->alternativaCertaLetter != $_POST["selectOption"]){
            setcookie($user->login . '-lastScore', strval($game->score));
            setcookie($user->login . '-lastTimePlayed', strval(date('d/m/Y')));
        
        }// If user win the game
        elseif(($game->score + 1) == count($game->questions)){
            // score + 1 because the add occur in prepareScreen() function
            setcookie($user->login . '-lastScore', strval($game->score + 1));

            setcookie($user->login . '-lastTimePlayed', strval(date('d/m/Y')));
        }
    }

    function loadQuestion(int $id){
        global $game;
        return $game->questions[$id];
    }


    function prepareScreen(){
        if(isset($_POST["selectOption"])){
            $question = loadQuestion($_POST["currentQuestionId"]);

            if($question->alternativaCertaLetter == $_POST["selectOption"]){
                global $game;
                $game->score++;
                
                $_POST["PlayerScore"] = $game->score;
                $_POST["currentQuestionId"]++;
                $game->currentQuestionId = $_POST["currentQuestionId"];
            }else{
                global $loseGame;
                $loseGame = true;
            }

        }
    }
?>