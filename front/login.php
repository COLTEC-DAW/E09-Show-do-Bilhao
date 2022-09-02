<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show do Bilhão</title>
</head>
<body>
    <?php include "partials/header.inc"; ?>

    <h2>Login</h2>
    <form action="auth.php" method="post">
       <label for="username">Login:</label>
       <input style="margin: 2px;" type="text" id="username" name="username"> <br>
       <label for="password">Senha:<label>
       <input style="margin: 2px;" type="password" id="password" name="password"> 
       <button type="submit">Enviar</button>
    </form>

    <p>Ainda não possui uma conta? <a href="./signup.php">Cadastre-se</a></p>

    <?php include "partials/footer.inc"; ?>
</body>
</html>