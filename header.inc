<?php
    if(isset($_POST['logout'])){
        if(isset($_SESSION['user'])){
            unset($_SESSION['user']);
            header ("Location:login.php");
        }
    }
?>

<header>
<form method="post">
    <?php
        if(isset($_SESSION['user']))
            echo "<input type = 'submit' value = 'Logout' name = 'logout'/>";
    ?>
</form>

</header>