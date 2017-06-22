<div>
    <div>
        <p>Bem vindo, <?= $_SESSION["login"] ?></p>
    </div>
    <div>
        <form method="get" action="logout.php">
            <button type="submit">Sair</button>
        </form>
    </div>
</div>