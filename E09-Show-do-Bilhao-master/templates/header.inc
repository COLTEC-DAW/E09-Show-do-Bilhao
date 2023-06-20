<?php
    global $game;

?>

<header>
    <h2>Show do Bilhão</h2>
    <ul>
        <?php
            if(!isset($_SESSION['user'])){
                echo "<a class='btn' href='./login.php'>Login</a>";
            }
        ?>
        <form method="post">
            <?php
                if(isset($_SESSION['user'])){
                    echo "<input class='btn' type='submit' name='logout' value='Logout' />";
                }
            ?>
        </form>
    </ul>
</header>