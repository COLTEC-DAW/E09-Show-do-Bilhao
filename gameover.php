<!DOCTYPE html>
<?php
    if (isset($_GET['score'])) {
        $score = $_GET['score'];
    }
?>
<html lang="pt-br">
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
        <h1 class="text-center">Erouuuuuu!!!!!!!!</h1>
        <h2 class="text-center">Voĉe acertou <span class="text-success"> <?php echo $score ?> </span> perguntas!</h2>
    </div>
    <?php include "./php/partials/_rodape.php" ?>
</body>
</html>