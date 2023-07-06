<?php

    require "usuarios.inc.php";

    session_start();

    if($_SERVER["REQUEST_METHOD"] == "POST"){
       
        $email = $_POST["email"];

        $usuarios = [];
        if (file_exists("usuarios.json")) {
            $json = file_get_contents("usuarios.json");
            $usuarios = json_decode($json);
        }

        if(isset($_POST["cadastrar"])){
            
            foreach($usuarios as $pessoa){
                if($pessoa->email === $email){
                    echo "O email já foi cadastrado. Tente outro";
                    exit;
                }
            }
            $usuarioNovo = cadastrar($_POST["nome"], $_POST["username"], $_POST["email"], $_POST["senha"]);
            $usuarios[] = $usuarioNovo;
            file_put_contents("usuarios.json", json_encode($usuarios));

            $_SESSION["usuario"] = $usuarioNovo;


        }else if(isset($_POST["login"])){

            $usuario = userExiste($_POST["username"], $_POST["senha"], $usuarios);

            if($usuario){
                $_SESSION["usuario"] = $usuario;
            }else{
                echo "Email ou senha inválidos. Tente novamente";
                exit;
            }
        }

        header("Location: jogo.php?id=0");
        exit;
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