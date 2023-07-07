<?php
session_start();

if (isset($_SESSION['autenticado']) && $_SESSION['autenticado']) {
    header("Location: index.php");
    exit();
}
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $usuarios = json_decode(file_get_contents('./data/usuarios.json'), true);
    $authenticated = false;
    foreach ($usuarios as $usuario) {
        if ($usuario['username'] === $username && $usuario['password'] === $password) {
            $authenticated = true;
            break;
        }
    }
    if ($authenticated) {
        $_SESSION['autenticado'] = true;
        $_SESSION['username'] = $username;
        $_SESSION['last_login'] = time();
        header("Location: index.php");
        exit();
    } 
    else {
        $error = "Usuário ou senha incorretos.";
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/style.css">
    <title>Login</title>
</head>

<body>
    <h2>Login</h2>
    <?php if (isset($error)) : ?>
        <p><?php echo $error; ?></p>
    <?php endif; ?>
    <form method="POST" action="login.php">
        <label for="username">Usuario:</label>
        <input type="text" name="username" required><br>
        <label for="password">Senha:</label>
        <input type="password" name="password" required><br>
        <button type="submit">Login</button>
    </form>
    <button onclick="location.href='cadastro.php'">Cadastrar User</button>
</body>

</html>

