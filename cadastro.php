<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $email = $_POST['email'];
    $nome = $_POST['nome'];
    $usuarios = json_decode(file_get_contents('data/usuarios.json'), true);
    foreach ($usuarios as $usuario) {
        if ($usuario['username'] === $username) {
            $error = "Usuário já cadastrado.";
            break;
        }
    }
    /* aqui eu crio e armazeno um novo usuário caso ele percorra usuarios acima e veja que aquele username ainda nn existe */
    if (!isset($error)) {        
        $novoUsuario = [
            "username" => $username,
            "password" => $password,
            "email" => $email,
            "nome" => $nome
        ];
        $usuarios[] = $novoUsuario;
        file_put_contents('data/usuarios.json', json_encode($usuarios));
        header("Location: login.php");
        exit();
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/style.css">
    <title>Cadastro</title>
</head>

<body>
    <h2>Cadastro</h2>

    <?php if (isset($error)) : ?>
        <p><?php echo $error; ?></p>
    <?php endif; ?>

    <form method="POST" action="cadastro.php">
        <label for="username">Username:</label>
        <input type="text" name="username" required><br>

        <label for="password">Senha:</label>
        <input type="password" name="password" required><br>

        <label for="email">Email:</label>
        <input type="email" name="email" required><br>

        <label for="nome">Nome:</label>
        <input type="text" name="nome" required><br>

        <button type="submit">Cadastrar</button>
    </form>
</body>

</html>
