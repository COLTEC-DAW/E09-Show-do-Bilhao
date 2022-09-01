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
    <link rel="stylesheet" href="style.css">
    <title>Ganhou</title>
</head> 
<body>
    <h1>Parabéns!</h1>
    <p>
        Você ganhou!
    </p>
    <form action="perguntas.php">
        <input type="submit" value="Recomeçar">
    </form>
</body>
</html>