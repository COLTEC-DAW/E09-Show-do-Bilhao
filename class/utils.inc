<?php

require_once "Question.inc";
require_once "User.inc";


function echoPergunta($questionId){
    $pergunta = Question::carregaPergunta($questionId);
    require realpath(__DIR__ . '/../partials/pergunta.inc');
}



function gameOver(){
    header("Location: ../game-over.php");
    setcookie('numeroAcertos', 0);
    $questionId = 0;
}


function gameWin(){
    header("Location: ../game-win.php");
    setcookie('numeroAcertos', 0);
    $questionId = 0;
}
?>