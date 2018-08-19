<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>Login</title>
</head>
<body>
    <?php include "partials/_menuPadrão.php" ?>
    <div class="container jumbotron w-50 mx-auto mt-5">
    <form method="POST" action="/handleLogin.php">
        <div class="form-group">
          <label for="exampleInputEmail1">Username</label>
          <input required name="username" type="username" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Insira deu Username">
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Senha</label>
          <input required name="senha" type="password" class="form-control" id="exampleInputPassword1" placeholder="Insira sua Senha">
        </div>
        <button type="submit" class="btn btn-primary">Cadastrar</button>
    </form>
    </div>
</body>
</html>