<div class="menu">
    <ul>
        <li><a href="">Sobre</a></li>
        <?php
        if (isset($_SESSION['logado'])) {
            ?>
            <li><a href="logout.php">Logout</a></li>
            <li><a>
                    <?php echo trim(json_decode($_SESSION['logado'], true)['username']) ?>
                </a></li>
            <?php
        } else {
            ?>
            <li><a href="login.php">Login</a></li>
            <?php
        }
        ?>
    </ul>
</div>