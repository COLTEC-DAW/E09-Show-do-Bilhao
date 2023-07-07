<?php
    if(isset($_POST["acertos"])) {
        $acertos = $_POST["acertos"] - 1;
    }else {
        $acertos = 0;
    }
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="style.css">
        <title>Game Over</title>
    </head>
    <body>
        <h1 class="acabou-mal">Acabou Para você.</h1>
        <p>Acertos: <?php echo $acertos?></p>
        <form action="index.php" method="POST">
            <input type="submit" value="Reiniciar" class="reiniciar">
        </form>
    </body>
</html>