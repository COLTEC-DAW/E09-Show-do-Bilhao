<?php require("login.class.php") ?>
<?php
   if(isset($_POST['submit'])){
      $user = new LoginUser($_POST['username'], $_POST['password']);
   }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Log in form</title>
</head>
<body>
    <form action="" method="post" enctype="multipart/form-data" autocomplete="off">
        <h2>Log in form</h2>
        <h4>Both fields are <span>required</span></h4>
        <label>Username</label>
        <input type="text" name="username">

        <label>Password</label>
        <input type="text" name="password">

        <button type="submit" name="submit">Log in</button>

        <p class="error"><?php echo @$user->error ?></p>
        <p class="success"><?php echo @$user->success ?></p>
   </form>
</body>
</html> 
