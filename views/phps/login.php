<?php session_start();
    require_once __DIR__ . "/../../models/user.inc";
    require_once  __DIR__ . "/../../controllers/utils.inc";

    $method = $_SERVER['REQUEST_METHOD'];

    if ($method === 'POST') {
        if (User::loginValido($_POST['nickname'], $_POST['password'])) {
            criaSessaoUsuario(new User($_POST['nickname'], $_POST['password']));
            header('location: perguntas.php');
        } else echo "<p style='foreground: red;'>Dados inválidos, tente novamente.</p>";
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página de login</title>
</head>
<body>
    <h2>Login</h2>
    <form action="/views/phps/login.php" method="post">
       <label for="nickname">Usuario:</label>
       <input style="margin: 2px;" type="text" id="nickname" name="nickname"> <br>
       <label for="password">Senha:<label>
       <input style="margin: 2px;" type="password" id="password" name="password"> 
       <button type="submit">Submit</button>
    </form>

    <p><strong>Ainda não possui conta?</strong> <a href="views/phps/cadastro.php">Clique aqui!</a></p>

    <?php include "views/incs/rodape.inc"; ?>
</body>
</html>