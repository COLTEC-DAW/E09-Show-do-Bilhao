<?php
session_start();
require "./classes/User.php";

$msgErro = null;

// Salva as informações enviadas e, caso a resposta da soma esteja certa,
// envia o jogador para a página de perguntas
if (isset($_POST["login"]) && isset($_POST["senha"])) {
    $login = $_POST["login"];
    $senha = $_POST["senha"];

    if (!empty($login) && !empty($senha)) {
        $user = User::fazLogin($login, $senha);

        // Se estiver tudo certo, vai pra página de perguntas
        if ($user != null) {
            $_SESSION["login"] = $user->getLogin();
            header("Location: /perguntas.php");
        }
        // Caso contrário, informa o erro e tenta novamente
        else {
            $msgErro = "Login não existente ou senha incorreta.";
        }
    } else {
        // Se nada for enviado, informa o erro
        $msgErro = "Insira todos os dados, de forma válida.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show do Bilhão - Login</title>
</head>

<body class="container">
    <h1>Show do Bilhão!!</h1>
    <h2>Página de identificação</h2>
    <?php
    if ($msgErro != null) echo "<h3>" . $msgErro . "</h3>";
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
        <p>Não tem uma conta?</p>
        <a href="cadastro.php"><button>Cadastre-se</button></a>
    </div>

    <?php
    include "./rodape.inc";
    ?>
</body>

</html>