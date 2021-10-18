<!DOCTYPE html>
<html>
    <head>
        <title>Registrar</title>
    </head>
    <body>
        <form action="index.php" method="post">
            <input type="hidden" name="action" value="login">
            
            Nome de Usuário:<br>
            <input type="text" name="username"><br>
            Senha:<br>
            <input type="password" name="password"><br>

            <input type="submit" value="Log in">
        </form>

        <form action="index.php" method="get">
            <input type="hidden" name="action" value="register">

            Não possui uma conta?<br>
            <input type="submit" value="Registrar">
        </form>
    </body>
</html>