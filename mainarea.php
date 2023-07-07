<?php
session_start();

if (!isset($_SESSION["usuario"])) {
    header("Location: index.php");
    exit;
}

$usuario = $_SESSION["usuario"];
$users = $_SESSION["Todosusers"];

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
    setcookie("lastSession", $sessao);

    session_unset();
    session_destroy();
    header("Location: index.php");
    exit;
}
?>

<!DOCTYPE html>
<html>
    
<head>
    <title>Queen Do Bilhão</title>
    <link rel="stylesheet" href="mainarea.css">
</head>

<body>
    <h1>Bem-vindo, <?php echo $usuario["username"]; ?>!</h1>
    <p>Email: <?php echo $usuario["email"]; ?></p>
    <p>Username: <?php echo $usuario["username"]; ?></p>
    <p>Última sessão em: <?php echo $_COOKIE["lastSession"] ?></p>

    <button><a href="./primeirapag.php">Play</a></button>

    <form method="post" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
        <input type="submit" name="logout" value="Logout">
    </form>
</body>
</html>