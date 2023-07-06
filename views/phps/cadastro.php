<?php 
    session_start();

    require_once __DIR__ . "/../../models/user.inc";
    require_once  __DIR__ . "/../../controllers/utils.inc";

    // Tratando a requisição
    $method = $_SERVER['REQUEST_METHOD'];

    if ($method === 'POST') {
        if (User::criarUsuario($_POST['name'], $_POST['nickname'], $_POST['email'], $_POST['password']))
            header('location: perguntas.php');
        else echo "<div style='position: fixed; bottom: 0; right: 0; background: rgba(12, 12, 12, 0.7); color: white; display: none;'><p>Usuario ou Email já utilizados</p></div>";
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página de cadastro</title>
</head>
<body>
    <h2>Cadastro</h2>
    <form action="cadastro.php" method="post">
        <label for="name">Nome: </label>
       <input style="margin: 2px;" id="name" type="text" name="name"> <br>
       <label for="email">Email:</label>
       <input style="margin: 2px;" type="email" id="email" name="email"> <br>
       <label for="nickname">Usuario:</label>
       <input style="margin: 2px;" type="text" id="nickname" name="nickname"> <br>
       <label for="password">Senha:<label>
       <input style="margin: 2px;" type="password" id="password" name="password"> 
       <button type="submit">Cadastre-se</button>
    </form>

    <p>Já possui uma conta? <a href="./login.php">Login</a></p>

    <?php include "../incs/rodape.inc"; ?>
</body>
</html>