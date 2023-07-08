<?php
// Verifica se o formulário foi enviado
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $login = $_POST['login'];
    $senha = $_POST['senha'];

    $linha = $nome . ',' . $email . ',' . $login . ',' . $senha . PHP_EOL;

    $arquivo = fopen('users.txt', 'a');
    fwrite($arquivo, $linha);
    fclose($arquivo);

    header("Location: perguntas.php");
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Cadastro de Usuário</title>
</head>
<body>
    <h1>Cadastro de Usuário</h1>

    <form method="POST" action="cadastro.php">
        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome" required><br>

        <label for="email">E-mail:</label>
        <input type="email" id="email" name="email" required><br>

        <label for="login">Login:</label>
        <input type="text" id="login" name="login" required><br>

        <label for="senha">Senha:</label>
        <input type="password" id="senha" name="senha" required><br>

        <input type="submit" value="Cadastrar">
    </form>
</body>
</html>
