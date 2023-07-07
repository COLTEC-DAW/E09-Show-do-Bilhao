        <h2><?=$question?></h2>
        <form action="pergunta.php?id=<?=$questID+1?>" method="POST">
        <?php for($i = 0; $i < 5; $i++){ ?>
            <div class="option"><input type="radio" name="option" value="<?=$i?>" id=""><label for="<?=$i?>"><?=$options[$i]?></label></div>
        <?php } ?>
            <input type="hidden" name="answer" value="<?=$answer?>">
            <input class="button" type="submit" value="Mandar">
        </form>