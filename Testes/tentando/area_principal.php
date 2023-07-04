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

    

// Define a hora da última sessão apenas quando o usuário fizer logout
if (isset($_POST["logout"])) {

    
    // Encerra a sessão do usuário
    $usuario->lastSessao = date("Y-m-d H:i");
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
    

    <?php
        if($usuario->primeira == true){
            echo '<p>É sua primeira vez aqui!</p>';
        }else{
            echo '<p>última sessão em: ' . $usuario->lastSessao . "<br><br>";
        }
    ?>
    <form method="post" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
        <input type="submit" name="logout" value="Logout">
    </form>
</body>
</html>

