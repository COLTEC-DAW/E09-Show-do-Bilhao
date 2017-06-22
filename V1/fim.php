<? ob_start();
session_start();?>
<!Doctype>
<html>
    <body>
        <?php include "menu.inc"; ?>
        <h1>RESULTADOS</h1>
        <?php
        if ($_POST["pontos"]==20) echo "<h2>PARABÉNS, VOCÊ GANHOU!!!</h2>";
        else echo "<h2>Parece que não foi hoje...</h2>";
        ?>
        <p>Número de acertos: <?= $_POST["pontos"] ?></p>
        <?php
        date_default_timezone_set("America/Sao_Paulo");
        echo "Sua última pontuação: ".$_COOKIE["lastScore"];
        setcookie("lastScore", $_POST["pontos"]);
        echo "Sua última partida: ". date ("d/m/Y", $_COOKIE["lastDate"]); 
        setcookie("lastDate", date("d/m/Y h:i:s"));
        ?>
        <br>
        <form method="get" action="logout.php">
            <button type="submit">Sair</button>
        </form>
        <?php include "rodape.inc"; ?>
    </body>
</html>