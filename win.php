<?php 
    session_start();
    
    if(!isset($_SESSION['username'])) {
        header("location: register.php");
    }

    setcookie("{$_SESSION['username']}ScoreMax", "5");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/styles.css">
    <title>Jogo do Bilhão</title>
</head>
<body>
    <?php 
        include ("./components/header.php");
    ?>

    <div class="content">
        <h1>GG</h1>
        <p>Parabens, você acertou todas as perguntas</p>
    </div>

    <?php 
        include ("./components/footer.php");
    ?>
</body>
</html>