<div>
    <div>
        <?php
        if ($_GET["num"]!=0) {
            echo "<p>Bem vindo, ".$_SESSION["login"]."</p>";
        }
        else {
            echo "<p>Bem vindo, ".$_POST["login"]."</p>";
        }
        ?>
    </div>
        <form method="get" action="logout.php">
            <button type="submit">Sair</button>
        </form>
    <div>
    </div>
</div>