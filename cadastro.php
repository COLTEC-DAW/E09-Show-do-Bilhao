<?php require("register.class.php") ?>
<?php
   if(isset($_POST['submit'])){
      // se a requisição do submit foi recebida, criamos um novo usuárioq a partir do método RegisterUser
      $user = new RegisterUser($_POST['username'], $_POST['password'], $_POST['email'], $_POST['name']);
   }
?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="styles.css">
   <title>CADASTRO</title>
</head>
<body>
     
   <form action="" method="post" enctype="multipart/form-data" autocomplete="off">
      <h2>CADASTRO</h2>
      <h4>Todos os campos são obrigatórios</h4>
 
      <label>Nome de usuário</label>
      <br>
      <input type="text" name="username" required>
      <br>
 
      <label>Senha</label>
      <br>
      <input type="password" name="password" required>
      <br>
       
      <label>Email</label>
      <br>
      <input type="email" name="email" required>
      <br>

      <label>Nome</label>
      <br>
      <input type="text" name="name" required>
      <br><br>
 
      <button type="submit" name="submit">Cadastrar</button>
 
      <p class="error"><?php echo @$user->error ?></p>
      <p class="success"><?php echo @$user->success ?></p>
      <a href="login.php">Login</a>
   </form>
</body>
</html>