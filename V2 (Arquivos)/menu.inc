<?php session_start(); ?>
<div>
    <div>
        <?php if ($_GET["num"]!=0) ?> <p>Bem vindo, <?php echo $_SESSION["login"] ?></p>
        <?php else ?> <p>Bem vindo, <?php echo $_POST["login"] ?></p>
    </div>
        <form method="get" action="logout.php">
            <button type="submit">Sair</button>
        </form>
    <div>
    </div>
</div>