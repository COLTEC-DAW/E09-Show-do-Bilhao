<?php
session_start();

// Verifica se o jogador (na outra é usuario) já está autenticado, redireciona para a página de perguntas
if (isset($_SESSION['jogador'])) {
    header("Location: perguntas.php");
    exit();
}

// Função para verificar se um usuário já existe, pega usuario e o arquivo com todos os usuarios, e ve um por um, compara o usuario com o argumento usuario do arquivo
function usuarioExiste($usuario, $usuarios) {
    foreach ($usuarios as $usuarioArmazenado) {
        if ($usuario === $usuarioArmazenado['usuario']) {
            return true;
        }
    }
    return false;
}

// Função para adicionar um novo usuário, pega o usuario difitado a senha e o arquivo de todos os usuarios. verifica o arquivo e ve se o usuario é igual a algum 
function adicionarUsuario($usuario, $senha, $usuarios) {
    $novoUsuario = array(
        'usuario' => $usuario,
        'senha' => $senha
    );
    $usuarios[] = $novoUsuario;
    return $usuarios;
}

// Verifica se o arquivo de usuários existe e se não existir cria um vazio 
if (!file_exists('usuarios.json')) {
    file_put_contents('usuarios.json', json_encode(array('usuarios' => [])));
}

// Verifica se o método de requisição é POST, e se existem as variaveis enviadas usuario e senha isset verifica. armazena usuario e senha nas variaveis com os mesmos nomes 
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['usuario']) && isset($_POST['senha'])) {
    $usuario = $_POST['usuario'];
    $senha = $_POST['senha'];

    // le e armazena em usuarias existentes do arquivo JSON
    $usuarios = json_decode(file_get_contents('usuarios.json'), true)['usuarios'];

    // Verifica se o usuário já existe, se não existir adiciona um novo usuario, e substitui todo o arquivo json pelo novo 
    if (usuarioExiste($usuario, $usuarios)) {
        $erroCriarConta = "Usuário já existe. Escolha outro nome de usuário.";
    } else {
        $usuarios = adicionarUsuario($usuario, $senha, $usuarios);
        // Salva os usuários no arquivo JSON
        file_put_contents('usuarios.json', json_encode(array('usuarios' => $usuarios)));

       //cria a sessão jogador e fala que ela tem o nome do usario 
        $_SESSION['jogador'] = $usuario;

        // Redireciona para a página de perguntas mas como ela busca por usuario ela joga pro login 
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
    <!-- mesma  lógica do forms comentado em login, verifica se deu erro ao criar e se for o caso (variavel não vazia) imprime ele. entra no forms e usa o mesmo esquema de label name e etcs.-->
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

