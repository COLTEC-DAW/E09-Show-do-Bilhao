
<h2 class="pergunta--titulo">Questão <?= $id+1 ?></h2>
<p class="pergunta--enunciado"><?= $perguntaAtual->enunciado ?></p>
        
<form action="index.php?id=<?= $id+1 ?>" method="POST">
  
<?php
foreach($perguntaAtual->alternativas as $alternativa){
    ?>
        <!-- =============== -->
        <div class="alternativa">
        <input type="radio" name="resp" value="<?= $alternativa->letra ?>" class = "input--alternativa">
        <p class="non-selected"><?= $alternativa->letra ?>) <?= $alternativa->resposta ?></p>
        </div>
        <!-- =============== -->               
    <?php
}
?>
    <!-- =============== -->
    <input type="hidden" name="pontuacao" value="<?= $game->pontuacao?>">
    <input type="submit" value="Confirmar resposta" id="BotaoEnviar">
    </form>
    <!-- =============== -->
<?php
?>