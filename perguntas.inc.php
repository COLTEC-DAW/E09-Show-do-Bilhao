<?php
if ($id == 5) {
    include 'Vencedor.php';
}elseif ($id == 0 || ( isset($_POST['alt']) && confereResposta($id-1 , $_POST['alt']) ) ) {?>
    <main>
    <form class="questao" action="perguntas.php?id=<?php echo $id + 1; ?>" method="POST">
        <h2 class="enunciado"> <?php echo $pergunta ?> </h2>

        <div class="alternativas">
            <?php foreach($opcoes as $index => $alternativa){ ?>
            
            <div class="alter">
                <input type='radio' name='alt' id='alt-<?php echo $index?>' value="<?php echo $index ?>">
                <label for='alt-<?php echo $index ?>'> <?php echo $alternativa ?> </label><br>
            </div>

            <?php } ?>

        </div>
        <input type="submit" value="Enviar">
        
    </form>

</main>
<?php } else {
    include "GameOver.php";
}?>
    