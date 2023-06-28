<?php
$questionId = isset($_GET['questionId']) ? $_GET['questionId'] : 0;

    echo json_encode($_POST);
?>


<?php 
if (isset($_POST['alternativa'])) { 
?>
  <script src="/assets/js/checa_resposta.js"></script>
<?php 
} 
?>


<div class="pergunta">
    <!-- <script src="/assets/js/checa_resposta.js"></script> -->
    <form method="POST" action="">
        <h2>
            <?php echo $pergunta->enunciado; ?>
        </h2>

        <ul>
            <?php foreach ($pergunta->alternativas as $index => $alternativa) { ?>
            <li>
                <label>
                    <input type="radio" name="alternativa" value="<?php echo $index;?>">
                    <?php echo $pergunta->alternativa ?>
                </label>
                <?php echo $alternativa ?>
            </li>
            <?php } ?>
        </ul>
        <input type="hidden" id="questionId" name="questionId" value=<?php echo "$questionId" ?>>
        <button type="submit" class="check-button">Checar Resposta</button>
    </form>
    <p class="result-message">lkjb</p>

</div>