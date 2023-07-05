<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['nome'])) {
    $nomeJogador = $_POST['nome'];
    $_SESSION['jogador'] = $nomeJogador;
    header("Location: perguntas.php");
    exit();
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Login</title>
</head>
<body>
    <h1>Login</h1>
    <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <label for="nome">Nome do jogador:</label>
        <input type="text" name="nome" id="nome" required>
        <input type="submit" value="Entrar">
    </form>
</body>
</html>

