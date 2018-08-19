<?php
echo'
    <div class="container d-flex justify-content-center">
        <img src="logos/game-over.png" alt="game_over" height="35%" width="35%">
    </div>

    <div class="container d-flex justify-content-between">
        <a href="\perguntas.php" class="btn btn-primary" role="button" aria-pressed="true">Reiniciar</a>
        <form action="/logout.php" method="post">
            <input type="hidden" name="id" value="'. $this->id_pergunta .'">
            <button type="submit" class="btn btn-danger">Sair</button>
        </form>
    </div>
';
?>