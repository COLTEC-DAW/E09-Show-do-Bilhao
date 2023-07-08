<?php
    $respostaUsuario = $_POST['alt'] ?? -1;
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

    <link rel="stylesheet" href="../css/index.css">

    <title>Game Over</title>
</head>
<body>
    <?php require "../templates/menu.inc.php"?>

    <div class="container">
        <div class="row">
            <div class="content mt-15 d-flex justify-content-center align-items-center">
                <h1>Você perdeu</h1>
                
            </div>
            <a href="../pages/index.php" class="d-flex justify-content-center align-items-center">Tentar de novo</a>
        </div>
    </div>

    <?php require "../templates/rodape.inc.php"?>
</body>
</html>