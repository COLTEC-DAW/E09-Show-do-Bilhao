<?php require("register.class.php") ?>
<?php
   if(isset($_POST['submit'])){
      $user = new RegisterUser($_POST['username'], $_POST['password'], $_POST['email'], $_POST['name']);
   }
?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="style.css" />
   <title>CADASTRO</title>
</head>
<body>
   <div class="central">
      <form action="" method="post" enctype="multipart/form-data" autocomplete="off">
         <h2>Cadastro</h2>
         <h4>Preencha todos<span> os requisitos</span></h4>
         <div class="cadastro">
            <label>Username:</label>
            <input class="preencher" type="text" name="username">
            <br/>
            <br/>

            <label>Senha:</label>
            <input class="preencher" type="password" name="password">
            <br/>
            <br/>

            <label>Email:</label>
            <input class="preencher" type="text" name="email">
            <br/>
            <br/>

            <label>Nome:</label>
            <input class="preencher" type="text" name="name">
            <br/>
            <br/>

            <button type="submit" name="submit">Registrar</button>
      
            <p class="error"><?php echo @$user->error ?></p>
            <p class="success"><?php echo @$user->success ?></p>
            <br/>
            <p>Já é cadastrado?</p>
            <button type="submit" name="submit">
               <a href="login.php">Login</a>
            </button>
            <br/><br/>
            <button type="submit" name="submit">
               <a href="paginaInicial.php">Voltar</a>
            </button>
            <br/><br/>
         </div>
      </form>
   </div>
</body>
</html>