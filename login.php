<?php
session_start();

// Verifica se o usuário já está autenticado, redireciona para a página de perguntas
if (isset($_SESSION['usuario'])) {
    header("location: perguntas.php");
    exit();
}

// Função para verificar as credenciais do usuário
function verificarCredenciais($usuario, $senha) {
    $usuarios = json_decode(file_get_contents('usuarios.json'), true)['usuarios'];
    foreach ($usuarios as $usuarioArmazenado) {
        if ($usuario === $usuarioArmazenado['usuario'] && $senha === $usuarioArmazenado['senha']) {
            return true; // Credenciais corretas
        }
    }
    return false; // Credenciais incorretas
}



if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['usuario']) && isset($_POST['senha'])) {
    $usuario = $_POST['usuario'];
    $senha = $_POST['senha'];

    // Verifica as credenciais do usuário
    if (verificarCredenciais($usuario, $senha)) {
        $_SESSION['usuario'] = $usuario;
        header("location: perguntas.php");
        exit();
    } else {
        $erroLogin = true; // Credenciais incorretas, exibe mensagem de erro
    }
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
    <?php if (isset($erroLogin) && $erroLogin): ?>
        <p>Usuário ou senha incorretos.</p>
    <?php endif; ?>
    <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <label for="usuario">Usuário:</label>
        <input type="text" name="usuario" id="usuario" required>
        <br>
        <label for="senha">Senha:</label>
        <input type="password" name="senha" id="senha" required>
        <br>
        <input type="submit" value="Entrar">
    </form>
    <p>Ainda não tem uma conta? <a href="criarConta.php">Criar nova conta</a></p>
    <p><a href="index.php">volte para a página inicial</a></p>
   
   
</body>
</html>


