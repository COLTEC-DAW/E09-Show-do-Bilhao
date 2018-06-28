<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Bem vindo</title>
</head>
<body>

    <h1 class="text-center">Bem vindo! Antes de continuar faça seu login</h1>
    
    <div class="justify-content-center d-flex">    
        <form class="justify-content-center" action="logado.php" method="post">
            <div class="form-group">
                <input type="text" class="form-control" name="login" placeholder="Login">
            <div class="form-group">
            </div>
                <input type="password" class="form-control" name="senha" placeholder="Senha">
            </div>
            <button type="submit" class="btn btn-primary">ENTRAR</button>
        </form>
    </div>



</body>
</html>
