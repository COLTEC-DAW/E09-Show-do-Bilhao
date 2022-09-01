<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/style.css">
        <title>Document</title>
    </head>
    <body> 
        <h1>Cadastro</h1>
        <form action="verificarCadastro.php" method='post'>
            <label for="name">Nome: </label>
            <input id="name" type="text" name="name" required><br/><br/>
            <label for="email">E-mail:</label>
            <input type="email" id="email" name="email" required><br/><br/>
            <label for="login">Usuário:</label>
            <input type="text" id="login" name="login" required><br/><br/>
            <label for="password">Senha:<label>
            <input type="password" id="password" name="password" required><br/><br/>
            <button type="submit">Entrar</button>
        </form>
    </body>
</html>