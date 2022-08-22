<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ganhou</title>
    </head>
    <body>
        <?php
            $logout = "partials/logout.inc";
            echo "<h2 align='center'> Parabéns! Você ganhou :) </h2>";
            if (is_readable($logout)) include $logout;
        ?>
        <a href="pagina_inicial.php"><button>Voltar para pagina inicial</button></a>
    </body>
</html>