<?php require("class/login.php");
    if(isset($_POST['submit'])){
        $user = new LoginUser($_POST['username'],$_POST['password']);
    } 
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Show do Pilão</title>
        <link rel="stylesheet" href="Style/style.css">
    </head>
    <body>
        <?php include("Partials/menu.inc");?>
        <form action="" method="post" enctype="multipart/form-data" autocomplete="off">
            <label>Username</label><input type="text" name="username" required><br>
            <label>Password</label><input type="password" name="password" required>
            <button type="submit" name="submit">Login</button>
            <p class="message"><?php echo @$user->message ?></p>
        </form>
        <h2><a href="signupPage.php">Registrar</a></h2>
        <?php include("Partials/rodape.inc");?>
    </body>
</html>
