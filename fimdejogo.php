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
    <br>
    <hr>
    <h1>Fim de jogo</h1>
    <?php $_POST = array(); ?>
    <a href="perguntas.php"><button>Jogar de novo</button></a><br><br>
    <a href="logout.php"><button>Logout</button></a>
    <br>
    <?php
    include "./rodape.inc";
    ?>
</body>

</html>