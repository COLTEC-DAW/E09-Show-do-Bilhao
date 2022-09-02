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
        <h2>Registro</h2>
        <form action="validate.php" method="post">
            <div class="loginInputs">
                <div>
                    Nome: <input type="text" name="name">
                </div>
                <div>
                    E-mail: <input type="text" name="email">
                </div>
                <div>
                    Login: <input type="text" name="login">
                </div>
                <div>
                    Senha: <input type="password" name="password">
                </div>
            </div>

            <br>

            <input type="submit" name="register" value="Registrar">
        </form>

        <p>Já tem uma conta criada? <a href="/login.php">Login</a></p>
    </div>
</body>
</html>