<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>LogIn</title>
        <link rel="stylesheet" href="../Style/style.css">
    </head>
    <body>
        <?php include("../Partials/menu.inc");?>
        <form action="index.php" type="POST">
            Login: <input type="text" id="login"><br>
            Senha: <input type="password" id="pswd"><br>
            <input type="submit" value="Log In" id="loginBtn">
        </form>
    </body>
</html>