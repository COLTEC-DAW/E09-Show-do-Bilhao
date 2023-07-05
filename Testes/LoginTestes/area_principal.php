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
$usuarios = $_SESSION["TodosUsuarios"];

// Define a hora da última sessão apenas quando o usuário fizer logout
if (isset($_POST["logout"])) {

    foreach ($usuarios as $key => $value) {
        if($value == $usuario){
            unset($usuarios[$key]);
            break;
        }
    }

    $usuario["lastSessao"] = date("d/m/Y H:i");
    $usuarios[] = $usuario;
    file_put_contents("usuarios.json", json_encode($usuarios));


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
</head>
<body>
    <h1>Bem-vindo, <?php echo $usuario["username"]; ?>!</h1>
    <p>Email: <?php echo $usuario["email"]; ?></p>
    <p>Username: <?php echo $usuario["username"]; ?></p>
    <p>Última sessão em: <?php echo $usuario["lastSessao"] ?></p>

    <form method="post" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
        <input type="submit" name="logout" value="Logout">
    </form>
</body>
</html>

