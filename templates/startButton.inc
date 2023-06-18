<?php global $user; ?>

<div>
    <h2>Seja Bem-vindo ao Show do Bilhão</h2>
    <h4>Jogando como: <?= $user->username ?> </h4>
    <?php
        if(isset($_COOKIE['lastScore'])){
            echo "<p>Última pontuação:" . $_COOKIE["lastScore"] . "</p>";
        }
        if(isset($_COOKIE['lastTimePlayed'])){
            echo "<p>Última vez que jogou:" . $_COOKIE["lastTimePlayed"] . "</p>";
        }
    ?>
    <form action='./questions.php' method='post'>
        <input type='hidden' name='currentQuestionId' value='0'>
        <input type='hidden' name='PlayerScore' value='0'>
        <input type='submit' value='Começar?'>
    </form>
</div>