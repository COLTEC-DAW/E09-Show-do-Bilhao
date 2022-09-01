<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show do bilhão - SignUp</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Show do Bilhão</h1> 
    <h3>Cadastre-se agora mesmo :)</h3>
    <form action="testCadastro.php" method='post'>
       <label for="nome">Nome</label>
       <input id="nome" type="text" name="nome" required> <br><br>
       <label for="email">E-mail</label>
       <input type="email" id="email" name="email" required> <br><br>
       <label for="login">Login</label>
       <input type="text" id="login" name="login" required> <br><br>
       <label for="senha">Senha<label>
       <input type="password" id="senha" name="senha" required> <br><br>
       <input type="submit" value="Entrar">
    </form>
</body>
</html>