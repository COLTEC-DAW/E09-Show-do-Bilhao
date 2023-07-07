<header class="cabecalho">

    <div class="ultimo_jogador">
        <h4>Ultimo Jogador</h4>
        <p>Usuario: <?= $_COOKIE["user"] ?></p>
        <p>pontos: <?= $_COOKIE["pontos"] ?></p>
    </div>

    <img src="./assets/img/logo.png" alt="Logo show do Bilhão" class="cabecalho--img">
    <form action="../../index.php" method="post">
        <input type="submit" name="logout" value="logout">
    </form>
</header>