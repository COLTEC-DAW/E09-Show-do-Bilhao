<!Doctype>
<html>
    <body>
        <h1>RESULTADOS</h1>
        <?php
        if ($_COOKIE["score"] == 20) { ?>
            <h2>Parabéns, você GANHOU!</h2>
  <?php }
        else { ?>
            <h2>Parece que não foi hoje...</h2>
  <?php } ?>
        <p>Você fez <?= $_COOKIE["score"]?> pontos</p>
        <a href="logout.php">Sair</a>
    </body>
</html>