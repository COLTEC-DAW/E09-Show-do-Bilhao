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
   <link rel="stylesheet" href="style.css" />
   <title>Login</title>
</head>
<body>
<div class="central">
   <form action="" method="post" enctype="multipart/form-data" autocomplete="off">
     
         <h2>Login</h2>
         <h4>Preencha todos<span> os requisitos</span></h4>
         <label>Username:</label>
         <input class="preencher" type="text" name="username">
         <br/><br/>
         <label>Senha:</label>
         <input class="preencher" type="password" name="password" required>
         <br/><br/>
         <button class="butaoLog" type="submit" name="submit">Login</button>
         <br/><br/>
         <button type="submit" name="submit">
            <a href="paginaInicial.php">Voltar</a>
        </button>
        <br/><br/>
 
      <p class="error"><?php echo @$user->error ?></p>
      <p class="success"><?php echo @$user->success ?></p>
   </form>
   </div>
</body>
</html>