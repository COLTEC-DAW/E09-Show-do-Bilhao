<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <form action="pagina_inicial.php" method='post'>

       <label for="username">Login: </label><input id="username" type="text" name="login"> <br>
       <label for="username">Senha: </label><input id="username" type="password" name="senha">

        <?php 
        // verificar no json se o login e senha existem
        // true -> redirecionar para a pagina inicial
        // false -> redirecionar para o cadastro do usuario
        ?>
       <button type="submit">Enviar</button>
    
    </form>
    <a href="cadastro_usuario.php"><button style="position: absolute; top: 50px; right: 50px;">Sign Up</button></a>
</body>
</html>