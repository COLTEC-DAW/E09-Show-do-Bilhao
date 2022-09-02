<?php require("login.class.php") ?>
<?php
   if(isset($_POST['submit'])){
      $user = new LoginUser($_POST['username'], $_POST['password']);
   }
?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
   <title>Login</title>
</head>
<body>
   <form action="" method="post" enctype="multipart/form-data" autocomplete="off">
      <h2>Faça seu login</h2>
      <h4>Todos os elementos são obrigatórios</h4>
      <label>Nome de usuário:</label>
      <br>
      <input type="text" name="username" required>
      <br>

      <label>Senha:</label>
      <br>
      <input type="password" name="password" required>
      <br><br>

      <button type="submit" name="submit">Log in</button>
      <br><br>
      <a href="cadastro.php">Cadastro</a>
 
      <p class="error"><?php echo @$user->error ?></p>
      <p class="success"><?php echo @$user->success ?></p>
   </form>
</body>
</html>