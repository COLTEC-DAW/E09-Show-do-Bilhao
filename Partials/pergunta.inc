        <h2><?=$question?></h2>
        <form action="pergunta.php?id=<?=$questID+1?>" method="POST">
        <?php for($i = 0; $i < 5; $i++){ ?>
            <input type="radio" name="option" value="<?=$i?>" id="">
            <label for="<?=$i?>"><?=$options[$i]?></label><br>
        <?php } ?>
            <input type="hidden" name="answer" value="<?=$answer?>">
            <input type="submit" value="Mandar">
        </form>