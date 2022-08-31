<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ganhou!</title>
</head>

<body>
    <h1>Parabéns! Você acaba de ganhar o Show do Bilhão!</h1>
    <?php $_POST = array(); ?>
    <a href="perguntas.php"><button>Jogar de novo</button></a><br><br>
    <a href="logout.php"><button>Logout</button></a>
    <br>
    <?php
    include "./rodape.inc";
    ?>
</body>

</html>