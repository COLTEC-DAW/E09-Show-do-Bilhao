<?php $pergunta = carregaPergunta($id); ?>
<div class="form" >
    <h2> <?php echo $pergunta->pergunta ?> </h2>
    <form action="index.php?id=<?php echo $id+1; ?>" method="POST">
    <?php for($i=1;$i<=4;$i++){
        $alternativa = $pergunta->alternativas[$i-1]; ?>
        <div class="pergunta">
            <label> <input type="radio" name="pergunta" value="<?php echo $i ?>"> <?php echo $alternativa ?> </label>
        </div>
    <?php } ?>
    <input class="pergunta" type="submit" name="resp">
    </form>
</div>