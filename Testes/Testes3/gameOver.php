<?php

    if(isset($_POST["acertos"])){
        $acertos = $_POST["acertos"] - 1;
    }else{
        $acertos = 0;
    }

?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Game Over</title>
</head>
<body>
    <h1>You lose!</h1>
    <p>Vc acertou <?php echo $acertos?> questoes</p>
    <form action="index.php" method="post">
        <input type="submit" value="Restart">
    </form>

    
</body>
</html>