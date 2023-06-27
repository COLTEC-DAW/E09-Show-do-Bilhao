<?php
    session_start();
    $login = $_SESSION["user"];
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/MainPage.css">
    <title>Show do Milhão</title>
</head>

<body>
    <div class="page-wrapper">
        <?php include "templates/header.inc"; ?>
        <h1>Perdeu!!!!!!!!!!!!!!!!!</h1>
        <h2>Seu score foi: <?=$_GET['score']?></h2>
        <h2>Seu recorde é: <?=getHighscore($login)?></h2>
        <h2><a href="MainPage.php">Voltar</a></h2>
        <?php include "templates/footer.inc"; ?>
    </div>
</body>

</html>