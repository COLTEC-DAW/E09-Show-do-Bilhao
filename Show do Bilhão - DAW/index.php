<?php
session_start();

// Função para verificar se o usuário existe no arquivo JSON
function verificarUsuario($email, $senha, $users)
{
    foreach ($users as $usuario) {
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
    $users = [];
    if (file_exists("users.json")) {
        $users = json_decode(file_get_contents("users.json"), true);
    }

    // Verifica se o formulário de cadastro foi enviado
    if (isset($_POST["cadastrar"])) {
        $username = $_POST["username"];

        // Verifica se o email já está em uso
        foreach ($users as $usuario) {
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
        );
        setcookie("lastSession", $data);

        // Adiciona o novo usuário ao array de usuários
        $users[] = $novoUsuario;

        // Armazena as informações atualizadas no arquivo JSON
        file_put_contents("users.json", json_encode($users));

        // Inicia a sessão do novo usuário
        $_SESSION["usuario"] = $novoUsuario;
        $_SESSION["Todosusers"] = $users;

        // Redireciona para a página principal
        header("Location: mainarea.php");
        exit;
    }

    // Verifica se o formulário de login foi enviado
    if (isset($_POST["login"])) {
        // Verifica se o usuário existe e a senha está correta
        $usuario = verificarUsuario($email, $senha, $users);
        if ($usuario) {
            // Inicia a sessão do usuário
            $_SESSION["usuario"] = $usuario;
            $_SESSION["Todosusers"] = $users;


            // Redireciona para a página principal
            header("Location: mainarea.php");
        } else {
            echo "Email ou senha inválidos. Tente novamente.";
        }
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Forms de Cadastro e Login salva ai </title>
    <link rel="stylesheet" href="login.css">
</head>
<body>
    <h1>Forms de Cadastro e Login</h1>
    
    <h2>Sign Up</h2>
    <form method="post" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
        <label for="email">Email:</label>
        <input type="email" name="email" required><br><br>

        <label for="username">Username:</label>
        <input type="text" name="username" required><br><br>

        <label for="senha">Senha:</label>
        <input type="password" name="senha" required><br><br>

        <input type="submit" name="cadastrar" value="Cadastrar" class="botao">
    </form>

    <h2>Sign In</h2>
    <form method="post" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
        <label for="email">Email:</label>
        <input type="email" name="email" required><br><br>

        <label for="senha">Senha:</label>
        <input type="password" name="senha" required><br><br>

        <input type="submit" name="login" value="Login" class="botao">
    </form>
</body>
</html>