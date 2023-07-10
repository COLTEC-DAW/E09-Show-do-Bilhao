<div class='rodape'>
    <?php 
        if(isset($_SESSION["usuario"])) {
            ?>
            <h2 class='pontos'>User: <?= $_SESSION["usuario"]->user ?></h2>
            <h2 class='pontos'>Pontos: <?= $game->pontuacao ?></h2>
            <?php
        }
    ?>
</div>