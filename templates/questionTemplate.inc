<?php
    global $game;
    $question = $game->getCurrentQuestion();
?>

<h2><?= $question->enunciado ?></h2>

<form method="post">
    <input type='hidden' name='currentQuestionId' value=<?= $game->currentQuestionId ?> />
    <input type='hidden' name='PlayerScore' value=<?=$game->score?> />
    
    <?php
        foreach($question->alternativas as $alternativa){
            echo "<input type='radio' name='selectOption' value='$alternativa->letter' />";
            echo "<span>[$alternativa->letter] $alternativa->enunciado</span> <br/>";
        }
    ?>
    
    <input type='submit' value='Responder'>
</form>