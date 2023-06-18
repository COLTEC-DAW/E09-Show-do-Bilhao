<header>
    <span>Show do Bilhão</span>
    <ul>
        <!-- TODO: Fazer o sistema de pontuação e de pergunta atual -->
        <li>Pontuação: </li>
        <li>Pergunta Atual: </li>
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