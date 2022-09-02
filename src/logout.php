<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link type="text/css" rel="stylesheet" href="logout_ganhou.css">
    <title>LOGOUT</title>
</head>
<body>
    <?php
    session_start();
    session_destroy();
    echo "Você deslogou";
    ?>
    <br>
    <a href="pagina_inicial.php"><button>Voltar para pagina inicial</button></a>
</body>
</html>
