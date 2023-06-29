<?php
    session_start();
    $login = $_SESSION["user"];
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="https://avatars.githubusercontent.com/u/104566026?v=4" type="image/x-icon">
    <link rel="stylesheet" href="../css/Win.css">
    <title>Show do Milhão</title>
</head>

<body>
    <div class="page-wrapper">
        <?php include "templates/header.inc"; ?>
        <main>
            <h1>Você ganhou!</h1>
            <h2>Seu score foi: 7</h2>
            <img height="100%" src="../images/Parabens.gif" alt="">
            <a href="MainPage.php">Voltar</a>
        </main>
        <?php include "templates/footer.inc"; ?>
    </div>
</body>

</html>