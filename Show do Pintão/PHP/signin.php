<?php require ("../class/registro.php");
    if(isset($_POST['submit'])){
        $user = new SignIn($_POST['name'], $_POST['email'], $_POST['username'], $_POST['password']);
    } 
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Show do Pilão</title>
        <link rel="stylesheet" href="../Style/style.css">
    </head>
    <body>
        <h1>SHOW DO PILÃO</h1>
        <h3>O maior show da históóóóóóóóóóóóóóóóóriaaaaaaaaaaa!!</h3>

        <form action="" method="POST">
            <label>Nome</label>
            <input type="text" name="name"><br>
            <label>Email</label>
            <input type="text" name="email"><br>
            <label>Usuário</label>
            <input type="text" name="username"><br>
            <label>Senha</label>
            <input type="password" name="password">
            <button type="submit" name="submitBtn">Registrar</button>
            <p class="message"><?php echo @$user->message ?></p>
        </form>

        <a href="login.php">Já tenho registro</a>
    </body>
</html>