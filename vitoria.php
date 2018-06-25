<!DOCTYPE html>
<html lang="pt-br">
<?php
    session_start();
    $email = $_SESSION["email"];
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>Você Perdeu</title>
</head>
<body>
    <?php include "./php/partials/_menu.php" ?>
    <div class="container jumbotron">
        <h1 class="text-center">Parabensss!!!</h1>
        <h2 class="text-center">Voĉe acertou Todas as perguntas <?= $email ?> !</h2>
    </div>
    <?php include "./php/partials/_rodape.php" ?>
</body>
</html>