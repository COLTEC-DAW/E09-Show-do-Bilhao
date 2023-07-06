<?php
session_start();

// Verifica se o usuário já está autenticado, redireciona para a página de perguntas
if (isset($_SESSION['jogador'])) {
    header("Location: perguntas.php");
    exit();
}

// Função para verificar se um usuário já existe
function usuarioExiste($usuario, $usuarios) {
    foreach ($usuarios as $usuarioArmazenado) {
        if ($usuario === $usuarioArmazenado['usuario']) {
            return true;
        }
    }
    return false;
}

// Função para adicionar um novo usuário
function adicionarUsuario($usuario, $senha, $usuarios) {
    $novoUsuario = array(
        'usuario' => $usuario,
        'senha' => $senha
    );
    $usuarios[] = $novoUsuario;
    return $usuarios;
}

// Verifica se o arquivo de usuários existe
if (!file_exists('usuarios.json')) {
    // Cria o arquivo de usuários vazio
    file_put_contents('usuarios.json', json_encode(array('usuarios' => [])));
}

// Verifica se o método de requisição é POST e se as informações de criação de conta foram enviadas
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['usuario']) && isset($_POST['senha'])) {
    $usuario = $_POST['usuario'];
    $senha = $_POST['senha'];

    // Lê os usuários existentes do arquivo JSON
    $usuarios = json_decode(file_get_contents('usuarios.json'), true)['usuarios'];

    // Verifica se o usuário já existe
    if (usuarioExiste($usuario, $usuarios)) {
        $erroCriarConta = "Usuário já existe. Escolha outro nome de usuário.";
    } else {
        // Adiciona o novo usuário
        $usuarios = adicionarUsuario($usuario, $senha, $usuarios);
        // Salva os usuários no arquivo JSON
        file_put_contents('usuarios.json', json_encode(array('usuarios' => $usuarios)));

        // Define o jogador como autenticado
        $_SESSION['jogador'] = $usuario;

        // Redireciona para a página de perguntas
        header("Location: perguntas.php");
        exit();
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Criar Nova Conta</title>
</head>
<body>
    <h1>Criar Nova Conta</h1>
    <?php if (isset($erroCriarConta)): ?>
        <p><?php echo $erroCriarConta; ?></p>
    <?php endif; ?>
    <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <label for="usuario">Usuário:</label>
        <input type="text" name="usuario" id="usuario" required>
        <br>
        <label for="senha">Senha:</label>
        <input type="password" name="senha" id="senha" required>
        <br>
        <input type="submit" value="Criar Conta">
    </form>
    <p>Já tem uma conta? <a href="login.php">Faça login</a></p>
</body>
</html>

