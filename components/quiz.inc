<div id="mainCard" class="card offset-xs-1 col-xs-10 offset-sm-1 col-sm-10 offset-md-3 col-md-6  align-self-center mt-5" >
    <div class="card-body">
        <p id="subtitle" >FILMES</p>
        <h3 class="card-title"><?=$dados[0]?></h3>
    </div>
    <ul class="list-group justify-content-center">

        <form class="" action="index.php" method="post">
            <input type="hidden" name="clicked" value="<?=0?>" />
            <input type="hidden" name="id" value="<?=$id?>" />
            <li class="option list-group-item list-group-item-light"><button class="button" type="submit" ><p><?= $dados[1][0] ?></p></button></li>
        </form>
        <form class="" action="index.php" method="post">
            <input type="hidden" name="clicked" value="<?=1?>" />
            <input type="hidden" name="id" value="<?=$id?>" />
            <li class="option list-group-item list-group-item-light"><button class="button" type="submit" ><p><?= $dados[1][1] ?></p></button></li>
        </form>
        <form class="" action="index.php" method="post">
            <input type="hidden" name="clicked" value="<?=2?>" />
            <input type="hidden" name="id" value="<?=$id?>" />
            <li class="option list-group-item list-group-item-light"><button class="button" type="submit" ><p><?= $dados[1][2] ?></p></button></li>
        </form>
        <form class="" action="index.php" method="post">
            <input type="hidden" name="clicked" value="<?=3?>" />
            <input type="hidden" name="id" value="<?=$id?>" />
            <li class="option list-group-item list-group-item-light"><button class="button" type="submit" ><p><?= $dados[1][3] ?></p></button></li>
        </form>
        <form class="lForm" action="index.php" method="post">
            <input type="hidden" name="clicked" value="<?=4?>" />
            <input type="hidden" name="id" value="<?=$id?>" />
            <li class="lForm option list-group-item list-group-item-light"><button class="button" type="submit" ><p><?= $dados[1][4] ?></p></button></li>
        </form>

    </ul>
</div>
