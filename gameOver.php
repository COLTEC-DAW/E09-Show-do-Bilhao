<?php
    if(isset($_POST["corretas"])){
        $corretas = $_POST["corretas"] - 1;
    }else
    {$corretas = 0;}

?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="fimdejogo.css">
    <title>Queen Do Bilhão: Resultado</title>
</head>
<body>
    <h1>Mona.. não foi dessa vez</h1>
    <p>Vc acertou <?php echo $corretas?> questoes</p>
    <form action="primeirapag.php" method="post">
        <input type="submit" value="Restart">
    </form>

    
</body>
</html>