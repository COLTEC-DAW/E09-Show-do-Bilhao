<?php
require "./usuario.php";
$erro = null;
$temp = true;
if (isset($_POST["nome"]) && isset($_POST["login"]) && isset($_POST["senha"]) && isset($_POST["email"])) {
    foreach ($_POST as $elemento) {
        if (empty($elemento)) {
            $temp = false;
            $erro = "Coloque os dados corretamente";
        }
    }

    if ($temp != false) {
        $usuario_novo = new User($_POST["nome"], $_POST["login"], $_POST["senha"], $_POST["email"]);
        if (!($usuario_novo->cadastra_usuario())) {
            $erro = "O email ou o login ja existem";
        } else {
            header("Location: ./login.php");
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
</head>

<body class="container">
    <h1>Show do Bilhão</h1>
    <h2>Cadastro</h2>
    <?php
    if ($erro != null) echo "<h3>" . $erro . "</h3>";
    ?>
    <div class="form">
        <form method="post">
            <p>Nome: </p>
            <input type="text" name="nome" tabindex="0"><br>
            <p>Login: </p>
            <input type="text" name="login" tabindex="0"><br>
            <p>Senha: </p>
            <input type="password" name="senha" tabindex="0"><br><br>
            <p>Email: </p>
            <input type="email" name="email" tabindex="0"><br>
            <button>Enviar</button>
        </form>
    </div>
    <br>
    <hr>
    <div class="login">
        <p>Se ja tiver uma conta, faça login:</p>
        <a href="login.php"><button>Login</button></a>
    </div>

    <?php
    include "./rodape.inc";
    ?>
</body>

</html>