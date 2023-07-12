<?php     
    session_start();
    if (!isset($_SESSION['isLogged']))
        header('location: login.php');
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../assets/stylish/rodape.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@40,700,0,0" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="shortcut icon" href="https://m.media-amazon.com/images/I/81ncT+-1D1L.png" type="image/x-icon">
    <link rel="stylesheet" href="../../assets/stylish/stilo.css">
    <link rel="stylesheet" href="../../assets/stylish/win-lose.css">
    <title>You Lose.</title>
</head>
<body>

    <?php include "../incs/menu.inc"; ?>

    <div class="content-container">
        <div class="container">
            <h1>Você Perdeu...</h1>
            <img src="https://imageproxy.ifunny.co/crop:x-20,resize:640x,quality:90x75/images/0e791f513628f7c05995ae8b8aebd324b46ef56b4db1ed7c33f13e6be31e11f5_1.jpg" alt="">
            <br>
            <a href="perguntas.php">
                <button>Recomeçar</button>
            </a>
        </div>
    </div>
</body>
</html>