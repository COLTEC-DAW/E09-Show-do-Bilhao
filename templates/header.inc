<?php
    global $game;

?>

<header>
    <span>Show do Bilhão</span>
    <ul>
        <?php
            if(!isset($_SESSION['user'])){
                echo "<a href='./login.php'>Login</a>";
            }
        ?>
        <form method="post">
            <?php
                if(isset($_SESSION['user'])){
                    echo "<input type='submit' name='logout' value='Logout' />";
                }
            ?>
        </form>
    </ul>
</header>