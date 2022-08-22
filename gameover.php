<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fim de Jogo</title>
</head>
<body>
    <?php
        echo "<h1>Você perdeu</h1><br/>";
        $logout = "partials/logout.inc";
        if(is_readable($logout))
        {
            include $logout;
        }
    ?>
    <a href="index.php"><button>Voltar para home</button></a>
</body>
</html>