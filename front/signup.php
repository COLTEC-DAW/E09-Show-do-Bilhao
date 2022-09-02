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

    <h2>SignUp</h2>
    <form action="auth.php" method="post">
        <label for="name">Nome: </label>
       <input style="margin: 2px;" id="name" type="text" name="name"> <br>
       <label for="email">E-mail:</label>
       <input style="margin: 2px;" type="email" id="email" name="email"> <br>
       <label for="username">Login:</label>
       <input style="margin: 2px;" type="text" id="username" name="username"> <br>
       <label for="password">Senha:<label>
       <input style="margin: 2px;" type="password" id="password" name="password"> 
       <button type="submit">Enviar</button>
    </form>

    <p>Já possui uma conta? <a href="./login.php">Login</a></p>

    <?php include "partials/footer.inc"; ?>
</body>
</html>