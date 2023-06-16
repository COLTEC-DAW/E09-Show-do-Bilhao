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
    </head>
    <body>
        <?php include("Partials/menu.inc");?>
        <form action="" method="POST" enctype="multipart/form-data" autocomplete="off">
            <label>Nome</label>
            <input type="text" name="name"><br>
            <label>Email</label>
            <input type="text" name="email"><br>
            <label>Usuário</label>
            <input type="text" name="username"><br>
            <label>Senha</label>
            <input type="password" name="password">
            <button type="submit" name="submit">Registrar</button>
            <p class="message"><?php echo @$user->message ?></p>
        </form>

        <h2><a href="loginPage.php">Já tenho registro</a></h2>
        <?php include("Partials/rodape.inc");?>
    </body>
</html>