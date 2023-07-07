<?php
    global $game;

?>

<header>
    <h2>Show do Bilhão</h2>
    <ul>
        <?php if(!isset($_SESSION['user'])) : ?>
            <a class='btn' href='./login.php'>Login</a>
        <?php endif; ?>
        
        <form method="post">
            <?php if(isset($_SESSION['user'])) : ?>
                <input class='btn' type='submit' name='logout' value='Logout' />
            <?php endif; ?>
        </form>
    </ul>
</header>