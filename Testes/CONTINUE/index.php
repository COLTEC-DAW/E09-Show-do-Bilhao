<?php

    require "usuarios.inc";

    session_start();

    if($_SERVER["REQUEST_METHOD" == "POST"]){
       
        $username = $_POST["username"];
        $senha = $_POST["senha"];

        $usuarios = [];
        if (file_exists("users.json")) {
            $json = file_get_contents("users.json");
            $usuarios = json_decode($json);
        }
    }

?>

<!DOCTYPE html>
<html>
<head>
    <title>Show do Bilhão</title>
</head>
<body>
    <h1> Vamos começar!! </h1>
    

    <h2>Cadastrar</h2>
    <form method="post" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
    
        <label for="Nome">Nome:</label>
        <input type="text" name="nome" required><br><br>

        <label for="email">Email:</label>
        <input type="email" name="email" required><br><br>

        <label for="username">Username:</label>
        <input type="text" name="username" required><br><br>

        <label for="senha">Senha:</label>
        <input type="password" name="senha" required><br><br>

        <input type="hidden" name="id" value="0">
        <input type="submit" name="cadastrar" value="Cadastrar">
    </form>

    <h2>Login</h2>
    <form method="post" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
        <label for="username">Username:</label>
        <input type="text" name="username" required><br><br>

        <label for="senha">Senha:</label>
        <input type="password" name="senha" required><br><br>

        <input type="hidden" name="id" value="0">
        <input type="submit" name="login" value="Login">
    </form>
</body>
</html>