<?php session_start();

require_once 'class/User.inc';
require_once 'class/utils.inc';

// Tratando a requisição
$method = $_SERVER['REQUEST_METHOD'];

if ($method === 'POST') {
    if (User::createUser($_POST['name'], $_POST['username'], $_POST['email'], $_POST['password'])) {
        header('location: index.php');
    } else {
        ?>
        <p>Username ou email já foram utilizados.</p>

        <?php
    }
}
?>
<html>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=VT323&display=swap">
<link rel="stylesheet" href="assets/css/menu.css">
<link rel="stylesheet" href="assets/css/signup.css">
<link rel="stylesheet" href="assets/css/rodape.css">
<title>Show do Bilhão</title>
</head>

<body>
    <!-- Cabeçalho -->
    <div class="header">
        <h1><a href="index.php">Show do Bilhão</a></h1>
        <?php require_once "partials/menu.inc"; ?>
    </div>

    <h1>Cadastro</h1>
    <form action="signup.php" method="POST">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required><br>

        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required><br>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required><br>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required><br>

        <input class="button" type="submit" value="Cadastrar">
    </form>
    <?php require_once "partials/rodape.inc"; ?>

</body>

</html>