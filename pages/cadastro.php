<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

    <link href="../css/index.css" rel="stylesheet">

    <title>Login</title>
</head>
<body>

    <?php require "../templates/menu.inc.php"?>

    <div class="container">
        <div class="row justify-content-center">
            <div class="content mt-15">
                <form action="../pages/login.php" method="POST">
                <div class="form-group">
                    <label>Nome</label>
                    <input type="text" name="nomeUsuario" class="form-control">
                </div>
                <div class="form-group">
                    <label>Senha</label>
                    <input type="password" name="senhaUsuario" class="form-control">
                </div>
                <div class="form-group">
                    <label>Email</label>
                    <input type="email" name="emailUsuario" class="form-control">
                </div>
                <div class="form-group">
                    <label>Login</label>
                    <input type="text" name="loginUsuario" class="form-control">
                </div>

                    <input type="submit" value="Cadastrar" class="mt-3">

                </form>
            </div>
        </div>
    </div>

    <?php require "../templates/rodape.inc.php"?>
</body>
</html>

<div class="form-group">
</div>