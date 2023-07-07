<?php require ("class/registro.php");
    if(isset($_POST['submit'])){
        $user = new SignUp($_POST['name'], $_POST['email'], $_POST['username'], $_POST['password']);
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
        <form action="" method="POST" enctype="multipart/form-data" autocomplete="off">
            <div><label>Nome: </label><input type="text" name="name" required></div>
            <div><label>Email: </label><input type="text" name="email" required></div>
            <div><label>Usuário: </label><input type="text" name="username" required></div>
            <div><label>Senha: </label><input type="password" name="password" required></div>
            <button type="submit" name="submit">Registrar</button>
        </form>

        <h2><a href="loginPage.php">Já tenho registro</a></h2>
        <?php include("Partials/rodape.inc");?>
    </body>
</html>
