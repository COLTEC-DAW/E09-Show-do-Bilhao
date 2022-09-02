<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/styles.css">
    <title>Jogo do Bilhão</title>
</head>
<body>
    <div class="login">
        <h2>Login</h2>
        <form action="validate.php" method="post">
            <div class="loginInputs">
                <div>
                    Login: <input type="text" name="login">
                </div>
                <div>
                    Senha: <input type="password" name="password">
                </div>
            </div>

            <br>

            <input type="submit" name="enter" value="Entrar">
        </form>

        <p>Ainda não tem uma conta? <a href="/register.php">Registre-se</a></p>
    </div>
</body>
</html>