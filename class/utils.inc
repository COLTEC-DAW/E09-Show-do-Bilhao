<?php

require_once "Question.inc";
require_once "User.inc";


function echoPergunta($questionId){
    $pergunta = Question::carregaPergunta($questionId);
    require realpath(__DIR__ . '/../partials/pergunta.inc');
}



function gameOver(){
    header("Location: ../game-over.php");
}


function gameWin(){
    header("Location: ../game-win.php");
}
?>