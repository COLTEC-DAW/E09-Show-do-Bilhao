<footer class="rodape">
    <div class="logout">
        <form  action="../../index.php" method="post">
            <input type="submit" name="logout" value="LOGOUT">
        </form>
    </div>
    <?php if($_POST["logout"]=="LOGOUT"){
        session_destroy();
        setcookie("pontuacao");
    }?>
    <div class="infos">
        <p> PONTUAÇÃO:<?php echo $_COOKIE["pontuacao"];?>/5</p>
        <p> USUÁRIO: <?php echo $_SESSION["login"]?></p>
    </div>
</footer>