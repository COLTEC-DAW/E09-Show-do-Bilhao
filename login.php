<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Login</title>
    </head>
    <body>
        <?php 
            if (isset($_GET["$id"])) {
                if ($_GET["$id"] == 1) {
                    echo "<h3>Login ou senha incorretos</h3>";
                } 
            }
            else {
                echo "<h3>Bem vindo ao Show do Bilhão</h3>";
                echo "<h3>Escolha uma das opições abaixo: </h3>";
            }
        ?>

        <form action="autenticacao.php" method="post">
            <button type="submit">Login</button>
        </form>
        <form action="cadastro.php" method="post">
            <button type="submit">Cadastrar</button>
        </form>
    </body>
</html>