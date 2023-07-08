<?php
// Verifica se o formulário foi enviado
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $login = $_POST['login'];
    $senha = $_POST['senha'];

    $arquivo = fopen('users.txt', 'r');

    while (($linha = fgets($arquivo)) !== false) {
        $campos = explode(',', $linha);

        if ($login === trim($campos[2]) && $senha === trim($campos[3])) {
            fclose($arquivo);
            header("Location: perguntas.php");
            exit;
        }
    }

    fclose($arquivo);
    header("Location: login.php?erro=1");
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>
<body>
    <h1>Login</h1>

    <?php
    // Verifica se houve um erro de autenticação
    if (isset($_GET['erro'])) {
        echo "<p>Usuário ou senha incorretos. Tente novamente.</p>";
    }
    ?>

    <form method="POST" action="login.php">
        <label for="login">Login:</label>
        <input type="text" id="login" name="login" required><br>

        <label for="senha">Senha:</label>
        <input type="password" id="senha" name="senha" required><br>

        <input type="submit" value="Entrar">
    </form>
</body>
</html>
