<?php session_start();

require_once 'class/User.inc';
require_once 'class/utils.inc';

// Tratando a requisição
$method = $_SERVER['REQUEST_METHOD'];

if ($method === 'POST') {
    if (User::isLoginValid($_POST['username'], $_POST['password'])) {
        createUserSession(new User($_POST['username'], $_POST['password']));
        header('location: index.php');
    } else {
        ?>
        <p>Dados inválidos, tente novamente.</p>

        <?php
    }
}
?>

<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=VT323&display=swap">
    <link rel="stylesheet" href="assets/css/menu.css">
    <link rel="stylesheet" href="assets/css/login.css">
    <link rel="stylesheet" href="assets/css/rodape.css">
    <title>Show do Bilhão</title>
</head>

<body>

    <!-- Cabeçalho -->
    <div class="header">
        <h1><a href="index.php">Show do Bilhão</a></h1>
        <?php require_once "partials/menu.inc"; ?>
    </div>

    <h1>Login</h1>
    <form action="login.php" method="POST">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required><br>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required><br>

        <a class="button" href="signup.php">Signup</a>
        <input class="button" type="submit" value="Login">
    </form>
    <?php require_once "partials/rodape.inc"; ?>

</body>


</html>