<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css"/>
    <title>Show do Bilhão</title>
</head>
<body>
    <?php
    session_start();
    include "partials/menu.inc";
    echo '<div class="col16" id="holder">';
    echo '<div class="col8" id="derrota-vitoria-box">';
        $premiacao = $_SESSION["premiacao"];
        echo "<p>Premiação: R$ $premiacao </p>";
        echo "<form action='showdobilhao.php?id=0' method='post'>";
        echo '<button type="submit">Jogar Novamente</button>';
        echo "</form>";
        $time = time();
        setcookie("premiacao", $premiacao);
        setcookie("time", $time);
    echo "</div>";    
    echo "</div>";    
    include "partials/rodape.inc";
    $_SESSION["premiacao"] = 0;
    ?>
</body>
</html>
