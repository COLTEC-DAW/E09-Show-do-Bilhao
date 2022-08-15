<?php
session_start();
require "./usuario.php";
$erro = null;
if (isset($_POST["login"]) && isset($_POST["senha"])) {
    $login = $_POST["login"];
    $senha = $_POST["senha"];

    if (!empty($login) && !empty($senha)) {
        $user = User::entra_login($login, $senha);
        if ($user != null) {
            $_SESSION["login"] = $user->getLogin();
            header("Location: ./perguntas.php");
        } else {
            $erro = "Login ou senha incorretos";
        }
    } else {
        $erro = "Coloque os dados corretamente";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>

<body class="container">
    <h1>Show do Bilhão</h1>
    <h2>Login</h2>
    <?php
    if ($erro != null) echo "<h3>" . $erro . "</h3>";
    ?>
    <div class="form">
        <form method="post">
            <p>Login: </p>
            <input type="text" name="login" tabindex="0"><br>
            <p>Senha: </p>
            <input type="password" name="senha" tabindex="0"><br><br>
            <button>Enviar</button>
        </form>
    </div>
    <br>
    <hr>
    <div class="register">
        <p>Faça o cadastro aqui:</p>
        <a href="cadastro.php"><button>Cadastro</button></a>
    </div>

    <?php
    include "./rodape.inc";
    ?>
</body>

</html>