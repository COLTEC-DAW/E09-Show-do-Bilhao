<?php

    require("../config/Questions.inc");
    //Game
    $playerScore = 0;
    if(!empty($_POST["PlayerScore"])){
        $playerScore = $_POST["PlayerScore"];
    }
    $game = new Game($playerScore);
    $game->questions = [$question1, $question2, $question3, $question4, $question5];
?>