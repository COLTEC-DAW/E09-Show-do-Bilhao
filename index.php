<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="style.css">
        <title>Index</title>
    </head>
    <body>
        <h1>Droga é o bilhas</h1>
        <form action="login.php" method="post">
            <label for="login">Usuário:</label>
            <input type="text" name="login" id="" required><br/><br/>
            <label for="password">Senha:</label>
            <input type="password" name="password" id="" required><br/><br/>
            <button type="submit">Entrar</button>
        </form>
        <br/>
        <form action="cadastro.php" method="post">
            <button type="submit">Cadastrar</button>
        </form>
    </body>
</html>