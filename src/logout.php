<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGOUT</title>
</head>
<body>
    <?php
    session_start();
    session_destroy();
    echo "voce deslogou";
    ?>
    <br>
    <a href="pagina_inicial.php"><button>Voltar para pagina inicial</button></a>
</body>
</html>