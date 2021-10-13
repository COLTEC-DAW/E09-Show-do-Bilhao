<!-- <?php
        if (isset($_POST["play"])) {
            if (strval($_POST["play"]) == "yes") {
                header("Location: /login.php");
            }
        }
        ?> -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fim de jogo</title>
</head>

<body>
    <?php include "./menu.inc"; ?>
    <h1>Fim de jogo</h1>
    <h2>Que pena... você errou!</h2>
    <?php $_POST = array(); ?>
    <a href="perguntas.php"><button>Jogar novamente</button></a>
</body>

</html>