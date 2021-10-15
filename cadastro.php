<?php
require "./classes/User.php";

$msgErro = null;
$temp = true;
// Só cadastra se os dados tiverem sido enviados
if (
    isset($_POST["nome"]) && isset($_POST["email"]) &&
    isset($_POST["login"]) && isset($_POST["senha"])
) {
    // Verifica se algum dos dados não foi enviado
    foreach ($_POST as $item) {
        if (empty($item)) {
            $temp = false;
            $msgErro = "Insira todos os dados, de forma válida.";
        }
    }

    if ($temp != false) {
        $newUser = new User($_POST["nome"], $_POST["email"], $_POST["login"], $_POST["senha"]);

        // Se o cadastro der certo, manda o usuário para a página de login
        if ($newUser->cadastra()) {
            header("Location: /login.php");
        }
        // Caso contrário, informa o erro
        else {
            $msgErro = "Email ou login já existente.";
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
    <title>Show do Bilhão - Cadastro</title>
</head>

<body class="container">
    <h1>Show do Bilhão</h1>
    <h2>Cadastro</h2>
    <?php
    if ($msgErro != null) echo "<h3>" . $msgErro . "</h3>";
    ?>
    <div class="form">
        <form method="post">
            <p>Nome: </p>
            <input type="text" name="nome" tabindex="0"><br>
            <p>Email: </p>
            <input type="email" name="email" tabindex="0"><br>
            <p>Login: </p>
            <input type="text" name="login" tabindex="0"><br>
            <p>Senha: </p>
            <input type="password" name="senha" tabindex="0"><br><br>
            <button>Enviar</button>
        </form>
    </div>
    <br>
    <hr>
    <div class="login">
        <p>Já tem uma conta?</p>
        <a href="login.php"><button>Entre</button></a>
    </div>

    <?php
    include "./rodape.inc";
    ?>
</body>

</html>