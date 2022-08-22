<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro usuário</title>
</head>
<body>
    <form action="handle_cadastro.php" method='post'>

       <label for="nome">Nome: </label>
       <input id="nome" type="text" name="nome">
       <label for="email">E-mail:</label>
       <input type="email" id="email" name="email">
       <label for="login">Login:</label>
       <input type="text" id="login" name="login">
       <label for="senha">Senha:<label>
       <input type="password" id="senha" name="senha">
       <button type="submit">Enviar</button>

    </form>
</body>
</html>
