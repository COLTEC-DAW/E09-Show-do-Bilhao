<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <?php
        if (isset($_GET['status']) && $_GET['status'] == 'sucesso'){
            echo "Cadastro realizado com sucesso!";
        }
    ?>
    <form action="handle_login.php" method='post'>

       <label for="login">Login: </label><input id="login" type="text" name="login" required> <br>
       <label for="senha">Senha: </label><input id="senha" type="password" name="senha" required>

       <button type="submit">Enviar</button>
    
    </form>
    <a href="cadastro_usuario.php"><button style="position: absolute; top: 50px; right: 50px;">Sign Up</button></a>
</body>
</html>