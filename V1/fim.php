<!Doctype>
<html>
    <body>
        <?php include "menu.inc"; ?>
        <h1>RESULTADOS</h1>
        <?php
        if ($_POST["win"]) echo "<h2>PARABÉNS, VOCÊ GANHOU!!!</h2>";
        else echo "<h2>Parece que não foi hoje...</h2>";
        ?>
        <p>Número de acertos: <?= $_POST["pontos"] ?></p>
        <?php
        echo "Sua última pontuação: ".$_COOKIE["lastScore"];
        $_COOKIE["lastScore"] = $_POST["pontos"];
        echo "Sua última partida: ".date('Y-m-d', $_COOKIE["lastDate"]); 
        $_COOKIE["lastDate"] = time();
        ?>
        <br>
        <form method="get" action="logout.php">
            <button type="submit">Sair</button>
        </form>
        <?php include "rodape.inc"; ?>
    </body>
</html>