<?php
    global $game;
    $question = $game->getCurrentQuestion();
?>

<h2><?= $question->enunciado ?></h2>
<h4>Pontuação atual: <?= $game->score ?></h4>
<h4>pergunta atual: <?= $game->currentQuestionId+1 ?></h4>
<form method="post">
    <input type='hidden' name='currentQuestionId' value=<?= $game->currentQuestionId ?> />
    <input type='hidden' name='PlayerScore' value=<?=$game->score?> />
    
    <?php foreach($question->alternativas as $alternativa): ?>
        <input type='radio' name='selectOption' value="<?= $alternativa->letter ?>" />
        <span>[<?= $alternativa->letter ?>] <?= $alternativa->enunciado ?></span> <br/>
    <?php endforeach; ?>
   
    
    <input type='submit' value='Responder'>
</form>