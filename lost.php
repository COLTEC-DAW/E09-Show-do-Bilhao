<?php require("class/user.php"); 
    session_start();
    if(!isset($_SESSION['user'])) header("Location: index.php");
    
    $user = new User($_SESSION['user']);
    ?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Show do Pilão</title>
        <link rel="stylesheet" href="Style/style.css">
        <link rel="shortcut icon" href="gallery/berti.jpg" type="image/x-icon">
    </head>

    <body>
        <div>
            <?php include("Partials/menu.inc");?>
            <div class="box">
            <p>Você é um lixo, horroroso, tenebroso, acabado, satânico. Todavia, você não deve ficar triste, até os mais fortes falham, como o Gugu Gaiteiro</p>
            <img src="gallery/gaiteiro.jpg">
            <p class="message">Sua pontuação máxima foi: <?=$user->__getPont()?></p>
            <p class="message">MELHORE.</p>
            </div>
            <div>
                <a href="pergunta.php">Restart</a>
            </div>
            <?php include("Partials/rodape.inc");?>
        </div>
    </body>
</html>
