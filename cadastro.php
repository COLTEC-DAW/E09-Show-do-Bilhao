<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Document</title>
</head>
<body>

    <h1>Bem vindo ao Show do Bilhão</h1>
    <h3>Cadastro</h3>

    <div>

        <form action="cadastro_confirmar.php" method="POST">

            <label>Nome</label><br>
            <input name="nome" type="text" maxlength="100" required><br><br>

            <label>Email</label><br>
            <input name="email" type="email" maxlength="100" required><br><br>

            <label>Login</label><br>
            <input name="login" type="text" maxlength="100" required><br><br>

            <label>Senha</label><br>
            <input name="senha" type="password" maxlength="100" required><br><br>

            <button type="submit">
                Cadastrar
            </button>

        </form>

    </div>

</body>
</html>