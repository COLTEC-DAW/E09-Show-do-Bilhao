<?php
    require("./config/Questions.inc");
    
    //Game
    $playerScore = 0;
    if(!empty($_POST["PlayerScore"])){
        $playerScore = $_POST["PlayerScore"];
    }
    $game = new Game($playerScore);

    $questionsPath = './src/Storage/Questions.json';
    
    if(file_exists($questionsPath)){
        $json = fopen($questionsPath, "r");
        $alternativas = fread($json, filesize($questionsPath)); 
        $alternativas = json_decode($alternativas);
        $game->questions = $alternativas;
        fclose($json);
    }
    
?>