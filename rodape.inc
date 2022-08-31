<footer>
    <br><form action='jogo.php' method='post'>
    <?php 
        session_destroy();
        unset($_POST['user']); 
    ?>
    <input type=submit name='logout' value='Logout'></form>
</footer>