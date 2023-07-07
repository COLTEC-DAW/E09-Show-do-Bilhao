<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro - Show do bilhão</title>
    <link rel="stylesheet" href="../../assets/css/style.css">
</head>
<body>
    <div class="pergunta">
        <form action="../../index.php" method="POST" class="login">
            <label for="login" class="login--label">Login: </label>
            <input type="text" name="cadastro_login" class="login--input">

            <label for="senha" class="login--label">Senha: </label>
            <input type="password" name="cadastro_senha" class="login--input">

            <label for="user" class="login--label">Nome de usuario: </label>
            <input type="text" name="cadastro_user" class="login--input">

            <label for="email" class="login--label">Email: </label>
            <input type="text" name="cadastro_email" class="login--input">


            <input type="submit" class="login--botao">
        </form>
    </div>
</body>
</html>
