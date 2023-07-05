<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página de cadastro</title>
</head>
<body>
    <h2>Cadastro</h2>
    <form action="auth.php" method="post">
        <label for="name">Nome: </label>
       <input style="margin: 2px;" id="name" type="text" name="name"> <br>
       <label for="email">Email:</label>
       <input style="margin: 2px;" type="email" id="email" name="email"> <br>
       <label for="username">Usuario:</label>
       <input style="margin: 2px;" type="text" id="username" name="username"> <br>
       <label for="password">Senha:<label>
       <input style="margin: 2px;" type="password" id="password" name="password"> 
       <button type="submit">Cadastre-se</button>
    </form>

    <p>Já possui uma conta? <a href="./login.php">Login</a></p>

    <?php include "../incs/rodape.inc"; ?>
</body>
</html>