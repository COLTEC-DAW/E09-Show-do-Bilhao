<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GameOver</title>
</head>
<body>
    <?php include "menu.inc"; //inclue menu?>

    <h1>Você perdeu</h1>
    <p>Número de acertos:<span><?= $_COOKIE["acertos"]?></span></p>
    

    <div>
        <form action="game.php" method="post">
            <input type="hidden" name="id" value="0">
            <input type="submit" value="Tentar Novamente">
        </form>
    </div>
    <div>
    <form method="post" action="index.php">
        <input type="submit" name="logout" value="Logout">
    </form>
</div>
<?php include "rodape.inc"; //inclue rodape?>
</body>
</html>