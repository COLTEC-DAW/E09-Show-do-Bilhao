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
        <link rel="shortcut icon" href="gallery/berti.jpg" type="image/x-icon">
    </head>
    <body>
        <?php include("Partials/menu.inc");?>
        <form action="" method="post" enctype="multipart/form-data" autocomplete="off">
            <div><label>Username: </label><input type="text" name="username" required></div>
            <div><label>Password: </label><input type="password" name="password" required></div>
            <button type="submit" name="submit">Login</button>
        </form>
        <h2><a href="signupPage.php">Registrar</a></h2>
        <?php include("Partials/rodape.inc");?>
    </body>
</html>
