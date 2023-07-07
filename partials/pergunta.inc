<div class="pergunta">
    <form method="POST" action="">
        <h2>
            <?php echo $questionId + 1 . ") "; ?>
            <?php echo $pergunta->enunciado; ?>
        </h2>

        <ul>
            <?php foreach ($pergunta->alternativas as $index => $alternativa) { ?>
                <li>
                    <label>
                        <input type="radio" name="alternativa" value="<?php echo $index; ?>">
                        <?php echo $alternativa ?>
                    </label>
                </li>
            <?php } ?>
        </ul>
        <input type="hidden" id="questionId" name="questionId" value="<?php echo $questionId ?>">
        <button type="submit" class="check-button">Checar Resposta</button>
        <p class="result-message"></p>
    </form>

</div>