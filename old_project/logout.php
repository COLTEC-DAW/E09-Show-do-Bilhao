<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Logout</title>
    </head>
    <body>
        <?php
        session_start();
        unset($_SESSION['username']);
        unset($_SESSION["password"]);
        session_destroy();
        echo "Você deslogou";
        header('Refresh: 2; URL = paginainicial.php')
        ?>
    </body>
</html>