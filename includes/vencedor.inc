<?php
echo'
    <div class="container d-flex justify-content-center">
        <img src="logos/vencedor.png" alt="game_over" height="35%" width="35%">
    </div>

    <div class="container d-flex justify-content-between">
        <a href="\perguntas.php" class="btn btn-primary" role="button" aria-pressed="true">Reiniciar</a>
        <form action="/logout.php" method="post">
            <input type="hidden" name="id" value="'. 5 .'">
            <button type="submit" class="btn btn-danger">Sair</button>
        </form>
    </div>
';
?>