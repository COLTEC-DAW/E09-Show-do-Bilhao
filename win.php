<?php 
    session_start();
    setcookie($_SESSION["user"] . "-max", 5); 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GANHOU!!</title>
    <link rel="stylesheet" href="style.css">
</head> 
<body>
    <h2>Parabéns!!</h2>
    <div>
        <a href="pergunta.php">Para jogar novamente, me aperte!</a>
    </div>
</body>
</html>