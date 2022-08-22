<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Você ganhou!</title>
</head>
<body>
    <?php 
        $logout = "partials/logout.inc";
        if(is_readable($logout))
        {
            include $logout;
        }
    ?>
    <a href="index.php"><button>Voltar para home</button></a>
</body>
</html>