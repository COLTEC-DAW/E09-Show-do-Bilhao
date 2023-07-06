<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Show do Bilhão</title>
        <link rel="stylesheet" href="../Styles/styles.css">
    </head>
<body>
<h1>Login - Show do Bilhão</h1>
    <form method="POST" action="/Services/ConfereLogin.php">
        <input type="text" name="login" id="login"
        placeholder="Nome de usuário">
        <input type="password" name="senha" id="senha">
        <input type="hidden" name="acao" value="signIn">
        <button type= "submit">Fazer login</button>
    </form>
    <a href='/Pages/SignUp.html'>deseja criar conta?</a>
</body>
</html>
