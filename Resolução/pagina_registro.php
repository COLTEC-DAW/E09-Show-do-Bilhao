<?php require("classes/registro.php") ?>
<?php
if (isset($_POST['submit'])) {
    $user = new RegisterUser($_POST['name'], $_POST['email'], $_POST['username'], $_POST['password']);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Document</title>
</head>

<body>
    <h1>Show do Bilhão</h1>

    <h3>Tens o que é necessário para ganhar um bilhão??</h3>


    <form action="" method="post" enctype="multipart/form-data" autocomplete="off">

        <h2>Não esqueça da sua senha!</h2>

        <label>Seu nome</label>
        <input type="text" name="name">

        <br>

        <label>Seu email</label>
        <input type="text" name="email">

        <br>

        <label>Nome de Usuário</label>
        <input type="text" name="username">

        <br>

        <label>Senha</label>
        <input type="password" name="password">

        <button type="submit" name="submit">Registrar</button>

        <p class="error"><?php echo @$user->error ?></p>
        <p class="success"><?php echo @$user->success ?></p>
    </form>

    <a href="pagina_login.php">Clique aqui para ir para a pagina de login</a>

</body>

</html>