<?php
session_start();

// Verifica se o usuário está logado
if (!isset($_SESSION["usuario"])) {
    // Redireciona para a página de login
    header("Location: index.php");
    exit;
}

// Obtém as informações do usuário
$usuario = $_SESSION["usuario"];
$users = $_SESSION["Todosusers"];

// Define a hora da última sessão apenas quando o usuário fizer logout
if (isset($_POST["logout"])) {
    foreach ($users as $key => $value) {
        if ($value == $usuario) {
            unset($users[$key]);
            break;
        }
    }

    $sessao = date("d/m/Y H:i");
    $users[] = $usuario;
    file_put_contents("users.json", json_encode($users));

    // Armazena a última sessão em um cookie
    setcookie("lastSession", $sessao);

    // Encerra a sessão do usuário  
    session_unset();
    session_destroy();

    // Redireciona para a página de login
    header("Location: index.php");
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Área Principal</title>
    <link rel="stylesheet" href="mainarea.css">
</head>
<body>
    <h1>Bem-vindo, <?php echo $usuario["username"]; ?>!</h1>
    <p>Email: <?php echo $usuario["email"]; ?></p>
    <p>Username: <?php echo $usuario["username"]; ?></p>
    <p>Última sessão em: <?php echo $_COOKIE["lastSession"]; ?></p>

    <button><a href="./iniciojogo.php">Play</a></button>

    <form method="post" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
        <input type="submit" name="logout" value="Logout">
    </form>
</body>
</html>