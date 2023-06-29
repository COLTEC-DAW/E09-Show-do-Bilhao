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
    </head>

    <body>
        <div>
            <p>Você é um lixo, horroroso, tenebroso, acabado, satânico. Todavia, você não deve ficar triste, até os mais fortes falham, como o Gugu Gaiteiro</p>
            <img src="gaiteiro.jpg">
            <p class="message">Sua pontuação máxima foi: <?php echo $user->__getPont() ?></p>
            <p class="message">MELHORE.</p>
            <div>
                <a href="pergunta.php">Restart</a>
            </div>
        </div>
    </body>
</html>