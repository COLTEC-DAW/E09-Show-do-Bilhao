<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logout</title>
</head>
<body>
    <?php
    session_start();
    session_destroy();
    echo "Deslogou";
    ?>
    <br>
    <a href="index.php"><button>Voltar para home</button></a>
</body>
</html>
