<?php
    include "sessoesCookies.inc";
    newSession();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show do Bilhão</title>
</head>
<body>
    <div>
        <?php
            include "menu.inc";
        ?>
    </div>
    <div>
        <?php
            echo "Olá ". $_SESSION["user"] .".<br>";

            if (isset($_GET["place"]))
            {
                echo "No último jogo você acertou ". $_COOKIE["lastGame". $_SESSION["user"]]."/5 perguntas.<br>";
            }
            else if (isset($_COOKIE["lastAcess". $_SESSION["user"]]) && isset($_COOKIE["lastGame". $_SESSION["user"]]))
            {
                echo "No último jogo você acertou ". $_COOKIE["lastGame". $_SESSION["user"]]."/5 perguntas.<br>";
                echo "Seu último acesso foi em ". $_COOKIE["lastAcess". $_SESSION["user"]]. ".<br>";
            }
            else if (isset($_COOKIE["lastGame". $_SESSION["user"]]))
            {
                echo "No último jogo você acertou ". $_COOKIE["lastGame". $_SESSION["user"]]."/5 perguntas.<br>";
            }
        ?>
        Para jogar, clique no link abaixo: <br>

        <a href="http://localhost/DAW-E09/perguntas.php">Jogar</a>
        <br><br>

        Se você gostaria de fazer logout, por favor clique no link: <br> <a href="http://localhost/DAW-E09/logout.php">Logout</a>
    </div>
    <div>
        <?php
        echo "<br>";
            include "rodape.inc";
        ?>
    </div>
</body>
</html>