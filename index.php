<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show do bilhão - LogIn</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Show do Bilhão</h1>

    <h3>Tem conta? Entre já ;)</h3>

    <form action="login.php" method="post">
        <label for="login">Login</label>
        <input type="text" name="login"> <br><br>
        <label for="senha">Senha</label>
        <input type="password" name="senha"> <br><br>
        <input type="submit" value="Entrar">
    </form>

    <a id="cadastro" href="cadastro.php">Não tem conta? Cadastre-se!</a>
</body>
</html>