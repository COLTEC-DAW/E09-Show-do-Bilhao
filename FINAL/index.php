<!DOCTYPE html>
<html lang="en">
    
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>

    <?php include "menu.inc";?>
    
    <h2>Cadastrar</h2>
    <form action="inicio.php" method="post">

        <label for="nome">Nome:</label>
        <input type="text" name="nome" required><br><br>

        <label for="email">Email:</label>
        <input type="email" name="email" required><br><br>

        <label for="username">Username:</label>
        <input type="text" name="username" required><br><br>

        <label for="senha">Senha:</label>
        <input type="password" name="senha" required><br><br>

        <input type="submit" name="cadastrar" value="Cadastrar">
    </form>

    <h2>Login</h2>
    <form action="inicio.php" method="post">
        <label for="username">Username:</label>
        <input type="text" name="username" required><br><br>

        <label for="senha">Senha:</label>
        <input type="password" name="senha" required><br><br>

        <input type="submit" name="login" value="Login">
    </form>

    <?php include "rodape.inc";?>
</body>
</html>