<?php 
function isUserRegistered($username) {
    $users = [];
    if (file_exists('usuarios.json')) {
        $users = json_decode(file_get_contents('usuarios.json'), true);
        if (!is_array($users)) {
            $users = []; // Inicializa como um array vazio se a decodificação falhar
        }
    }
    
    foreach ($users as $user) {
        if ($user['username'] === $username) {
            return true;
        }
    }
    
    return false;
}
  
  // Função para adicionar um novo usuário ao arquivo JSON
  function addUser($username, $password , $email , $name) {
      $users = [];
      
      if (file_exists('usuarios.json')) {
          $users = json_decode(file_get_contents('usuarios.json'), true);
      }
      
      $newUser = [
          'username' => $username,
          'password' => $password,
          'email' => $email,
          'name' => $name,
      ];
      
      $users[] = $newUser;
      
      file_put_contents('usuarios.json', json_encode($users));
  }
  
  
  
  // Verifica se o formulário de registro foi enviado
  if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["register"])) {
      $registerUsername = $_POST["register-username"];
      $registerPassword = $_POST["register-password"];
      $registerEmail = $_POST["register-email"];
      $registerName = $_POST["register-name"];
     
      // Verifica se o usuário já está registrado
      if (isUserRegistered($registerUsername)) {
          $registerError = "Usuário já registrado.";
      } else {
          // Adiciona o novo usuário ao arquivo JSON
          addUser($registerUsername, $registerPassword , $registerEmail , $registerName);
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
<?php 
    if (isset($registerSuccess)) { ?>
        <p><?php echo $registerSuccess; ?></p>
    <?php } ?>
    
    <?php if (isset($registerError)) { ?>
        <p><?php echo $registerError; ?></p>
    <?php } ?>
<h2>Registro</h2>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <label for="register-username">Usuário:</label>
        <input type="text" id="register-username" name="register-username" required><br><br>
        
        <label for="register-password">Senha:</label>
        <input type="password" id="register-password" name="register-password" required><br><br>
        
        <label for="register-email">Email:</label>
        <input type="email" id="register-email" name="register-email" required><br><br>
        
        <label for="register-name">Nome:</label>
        <input type="text" id="register-name" name="register-name" required><br><br>
        
        <input type="submit" name="register" value="Registrar"> <br><br>
        <a href="login.php">Clique aqui para voltar a tela de login</a>    <br><br>  

    </form>
</body>
</html>