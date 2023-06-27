<?php
    session_start();
    $login = $_SESSION["user"];
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/Lose.css">
    <title>Show do Milhão</title>
</head>

<body>
    <div class="page-wrapper">
        <?php include "templates/header.inc"; ?>
        <main>
            <h1>Você perdeu!</h1>
            <div class="score">
                <h2>Seu score foi: <?=$_GET['score']?></h2>
            </div>
            <div class="highscore">
                <h2>Seu recorde é: <?=getHighscore($login)?></h2>
            </div>
            <a href="MainPage.php">Voltar</a>
        </main>
        <?php include "templates/footer.inc"; ?>
    </div>
</body>
</html>