<?php
    if(isset($_POST['logout'])) {
        if(isset($_SESSION['loginAtual'])) {
            unset($_SESSION['loginAtual']);
        }
    }
?>

<header>
    <form method="POST">
        <?php
            if(isset($_SESSION['loginAtual'])) {
                echo "Logado como" . $_SESSION['loginAtual'];
                echo "<input type='submit' name='logout' value='Logout'/>";
            }
        ?>
    </form>
</header>