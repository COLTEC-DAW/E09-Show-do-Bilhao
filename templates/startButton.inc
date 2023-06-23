<?php global $user; ?>

<div class='start-wrapper'>
    <h2 class="title">Seja Bem-vindo ao Show do Bilhão</h2>

    <div class="start-body">
        <h4>Jogando como: <?= $user->username ?> </h4>
        <?php
            if(isset($_COOKIE[$user->login . '-lastScore'])){
                echo "<p>Última pontuação: " . $_COOKIE[$user->login . "-lastScore"] . "</p>";
            }
            if(isset($_COOKIE[$user->login . "-lastTimePlayed"])){
                echo "<p>Última vez que jogou: " . $_COOKIE[$user->login . "-lastTimePlayed"] . "</p>";
            }
        ?>
        <form action='./questions.php' method='post'>
            <input type='hidden' name='currentQuestionId' value='0'>
            <input type='hidden' name='PlayerScore' value='0'>
            <input class="btn" type='submit' value='Começar?'>
        </form>
    </div>
</div>