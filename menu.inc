<div>
    <!--
    <div>
        <?php// if ($_GET["num"]!=0) ?> <p>Bem vindo, <?= $_SESSION["login"] ?></p>
        <?php// else ?> <p>Bem vindo, <?= $_POST["login"]?> </p>
    </div>
    
    Não tava funcioanndo então eu gambiarrei
    Mas ficou pior entao eu comentei
    Magicamente funciona
    Vou deixar isso aqui por precaução
    
    -->
    <div>
        <p>Bem vindo, <?= $_SESSION["login"] ?></p>
    </div>
    <div>
        <form method="get" action="logout.php">
            <button type="submit">Sair</button>
        </form>
    </div>
</div>