<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Sair</title>
    </head>
    <body>
        <?php
            session_start();
            session_destroy();
            echo "Você saiu!";
        ?>
        <br>
        <a href="Index.php"><button>Voltar para pagina inicial</button></a>
    </body>
</html>
