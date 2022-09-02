<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN</title>
</head>
<body>
  <header>
    <h1>Login</h1>
  </header>
  <main>
    <form action="autenticador.php" method="post">
      <label>Login:
        <input name="user[login]" type="text" required>
      </label>   
      <label>Password:
        <input name="user[senha]" type="password" required>
      </label>   
      <button type = "submit">Entrar</button>
    </form>
  </main>

</body>