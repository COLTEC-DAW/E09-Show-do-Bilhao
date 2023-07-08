<?php
session_start();
// Função para verificar se o usuário já está registrado
function isUserRegistered($username) {
  $users = [];
  if (file_exists('usuarios.json')) {
    $users = json_decode(file_get_contents('usuarios.json'), true);
    }  
  foreach ($users as $user) {
        if ($user['username'] === $username) {
            return true;
        }
    }
    return false;
}

// Função para verificar se as credenciais de login são válidas
function verifyLogin($loginUsername, $loginPassword, $users) {
    foreach ($users as $user) {
        if ($user['username'] === $loginUsername && $user['password'] === $loginPassword) {
            return true;
        }
    }
    return false;
}

// Verifica se o formulário de login foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["login"])) {
    $loginUsername = $_POST["login-username"];
    $loginPassword = $_POST["login-password"];
   
    $users = [];
    
    if (file_exists('usuarios.json')) {
        $users = json_decode(file_get_contents('usuarios.json'), true);
    }
    
    // Verifica as credenciais de login
    if (verifyLogin($loginUsername, $loginPassword, $users)) {
        // Login bem-sucedido, redireciona para a página de perguntas
        $_SESSION['login'] = $loginUsername;
        $_SESSION['senha'] = $loginPassword;
        header("Location: perguntas.php");
        exit();
    } else {
        $loginError = "Credenciais inválidas.";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php include "menu.inc"?>
    

<h1>Login</h1>
    
    <?php if (isset($registerSuccess)) { ?>
        <p><?php echo $registerSuccess; ?></p>
    <?php } ?>
    
    <?php if (isset($registerError)) { ?>
        <p><?php echo $registerError; ?></p>
    <?php } ?>
    
    <?php if (isset($loginError)) { ?>
        <p><?php echo $loginError; ?></p>
    <?php } ?>
    
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <label for="login-username">Usuário:</label>
        <input type="text" id="login-username" name="login-username" required><br><br>
        
        <label for="login-password">Senha:</label>
        <input type="password" id="login-password" name="login-password" required><br><br>
        <a href="registro.php">Clique aqui para fazer o registro</a>    <br><br>  
        <input type="submit" name="login" value="Login">
        <p> Você está logado como: <?php echo $_SESSION['login'] ?></p>  
    </form>


<?php include "rodape.inc"?>

</body>
</html>