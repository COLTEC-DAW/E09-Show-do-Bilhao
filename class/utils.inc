<?php

require_once "Question.inc";
require_once "User.inc";


function echoPergunta($questionId)
{
    $pergunta = Question::carregaPergunta($questionId);
    require_once realpath(__DIR__ . '/../partials/pergunta.inc');
}


function gameOver()
{
    header("Location: ../game-over.php");
    setcookie('numeroAcertos', 0);
}


function gameWin()
{
    header("Location: ../game-win.php");
}


function goToNextQuestion($questionId)
{
    if ($questionId < Question::getCountPerguntas()) {
        header("location: ../perguntas.php?questionId=" . ++$questionId);
    } else {
        header("location: ../game-win.php");
    }
}

function resetScore()
{
    setcookie('numeroAcertos', 0);
}


function createUserSession($user)
{
    $_SESSION['logado'] = json_encode($user);
}


function checkUserSession()
{
    if (isset($_SESSION['logado'])) {
        return $_SESSION['logado'];
    }else{
        return false;
    }
}




?>