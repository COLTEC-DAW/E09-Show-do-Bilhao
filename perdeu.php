<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perdeu</title>
    </head>
    <body>
        <?php 
            $logout = "partials/logout.inc";
            echo "<h2 align='center'> Você perdeu :( </h2>";
            if (is_readable($logout)) include $logout;
        ?>
        <a href="paginainicial.php"><button>Voltar para pagina inicial</button></a>
    </body>
</html>