<?php
session_start();

// Função para verificar se o usuário existe no arquivo JSON
function verificarUsuario($email, $senha, $usuarios)
{
    foreach ($usuarios as $usuario) {
        if ($usuario['email'] === $email && $usuario['senha'] === $senha) {
            return $usuario;
        }
    }
    return null;
}

// Verifica se o formulário de cadastro ou login foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtém os valores enviados pelo formulário
    $email = $_POST["email"];
    $senha = $_POST["senha"];

    // Verifica se o usuário está cadastrado
    $usuarios = [];
    if (file_exists("usuarios.json")) {
        $usuarios = json_decode(file_get_contents("usuarios.json"), true);
    }

    // Verifica se o formulário de cadastro foi enviado
    if (isset($_POST["cadastrar"])) {
        $username = $_POST["username"];

        // Verifica se o email já está em uso
        foreach ($usuarios as $usuario) {
            if ($usuario["email"] === $email) {
                echo "O email já está em uso. Tente outro.";
                exit;
            }
        }
        $data = date("d/m/Y H:i");

        // Cria um array com as informações do novo usuário
        $novoUsuario = array(
            "email" => $email,
            "username" => $username,
            "senha" => $senha,
            "lastSessao" => $data
        );

        // Adiciona o novo usuário ao array de usuários
        $usuarios[] = $novoUsuario;

        // Armazena as informações atualizadas no arquivo JSON
        file_put_contents("usuarios.json", json_encode($usuarios));

        // Inicia a sessão do novo usuário
        $_SESSION["usuario"] = $novoUsuario;
        $_SESSION["TodosUsuarios"] = $usuarios;

        // Redireciona para a página principal
        header("Location: area_principal.php");
        exit;
    }

    // Verifica se o formulário de login foi enviado
    if (isset($_POST["login"])) {
        // Verifica se o usuário existe e a senha está correta
        $usuario = verificarUsuario($email, $senha, $usuarios);
        if ($usuario) {
            // Inicia a sessão do usuário
            $usuario->primeira = false;
            $_SESSION["usuario"] = $usuario;
            $_SESSION["TodosUsuarios"] = $usuarios;
            
            // Redireciona para a página principal
            header("Location: area_principal.php");
            exit;
        } else {
            echo "Email ou senha inválidos. Tente novamente.";
        }
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Formulário de Cadastro e Login</title>
</head>
<body>
    <h1>Formulário de Cadastro e Login</h1>
    
    <h2>Cadastrar</h2>
    <form method="post" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
        <label for="email">Email:</label>
        <input type="email" name="email" required><br><br>

        <label for="username">Username:</label>
        <input type="text" name="username" required><br><br>

        <label for="senha">Senha:</label>
        <input type="password" name="senha" required><br><br>

        <input type="submit" name="cadastrar" value="Cadastrar">
    </form>

    <h2>Login</h2>
    <form method="post" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
        <label for="email">Email:</label>
        <input type="email" name="email" required><br><br>

        <label for="senha">Senha:</label>
        <input type="password" name="senha" required><br><br>

        <input type="submit" name="login" value="Login">
    </form>
</body>
</html>
