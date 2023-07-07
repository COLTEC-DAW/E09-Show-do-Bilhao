<?php
session_start();

function verificarUsuario($email, $senha, $users)
{
    foreach ($users as $usuario) 
    {
        if ($usuario['email'] === $email && $usuario['senha'] === $senha) 
        {   return $usuario;}
    }
    return null;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $senha = $_POST["senha"];

    $users = [];
    if (file_exists("users.json")) 
    {   $users = json_decode(file_get_contents("users.json"), true);   }

    if (isset($_POST["cadastrar"])) {
        $username = $_POST["username"];

        foreach ($users as $usuario) {
            if ($usuario["email"] === $email) {
                echo "O email já está em uso. Tente outro.";
                exit;
            }
        }
        $data = date("d/m/Y H:i");
        $novoUsuario = array(
            "email" => $email,
            "username" => $username,
            "senha" => $senha,
        );
        setcookie("lastSession", $data);
        $users[] = $novoUsuario;

        file_put_contents("users.json", json_encode($users));

        $_SESSION["usuario"] = $novoUsuario;
        $_SESSION["Todosusers"] = $users;

        header("Location: mainarea.php");
        exit;
    }
    if (isset($_POST["login"])) 
    {
        $usuario = verificarUsuario($email, $senha, $users);
        if ($usuario) 
        {
            $_SESSION["usuario"] = $usuario;
            $_SESSION["Todosusers"] = $users;
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
    <title>Cadastro e Login</title>
    <link rel="stylesheet" href="forms.css">
</head>
<body>
    <h1>Cadastro e Login</h1>
    
    <h2>Cadastrar</h2>
    <form  id="cadastrar" method="post" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
        <label for="email">Email:</label>
        <input type="email" name="email" required><br><br>

        <label for="username">Username:</label>
        <input type="text" name="username" required><br><br>

        <label for="senha">Senha:</label>
        <input type="password" name="senha" required><br><br>

        <input type="submit" name="cadastrar" value="Cadastrar">
    </form>

    <h2>Login</h2>
    <form  id="log" method="post" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
        <label for="email">Email:</label>
        <input type="email" name="email" required><br><br>

        <label for="senha">Senha:</label>
        <input type="password" name="senha" required><br><br>

        <input type="submit" name="login" value="Login">
    </form>
</body>
</html>