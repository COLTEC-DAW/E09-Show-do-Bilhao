<?php 
    session_start();

    require_once __DIR__ . "/../../models/user.inc";

    // Tratando a requisição
    $method = $_SERVER['REQUEST_METHOD'];

    if ($method === 'POST') {
        $name = $_POST['name'];
        $nickname = $_POST['nickname'];
        $email = $_POST['email'];
        $password = $_POST['password'];

        if (empty($name) || empty($nickname) || empty($email) || empty($password)) {
            echo "<div class='err'><p>Preencha todos os campos obrigatórios.</p></div>";
        } else {
            if (User::criarUsuario($name, $nickname, $email, $password))
                header('location: perguntas.php');
            else
                echo "<div class='err'><p>Usuário ou Email já utilizados.</p></div>";
        }
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@40,700,0,0" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="shortcut icon" href="https://o.remove.bg/downloads/6b4a0072-18e4-44b5-b446-765e28e1cfe6/unnamed-removebg-preview.png" type="image/x-icon">
    <link rel="stylesheet" href="../../assets/stylish/card.css">
    <link rel="stylesheet" href="../../assets/stylish/rodape.css">
    <title>Página de cadastro</title>
</head>
<body>
    <div class="card">
        <h2>Cadastro</h2>
        <form action="cadastro.php" method="post">
            <label for="name">Nome: </label>
            <input style="margin: 2px;" id="name" type="text" name="name" required> <br>

            <label for="email">Email:</label>
            <input style="margin: 2px;" type="email" id="email" name="email" required> <br>

            <label for="nickname">Usuário:</label>
            <input style="margin: 2px;" type="text" id="nickname" name="nickname" required> <br>

            <label for="password">Senha:<label><br>
            <input style="margin: 2px;" type="password" id="password" name="password" required>  <br>
            
            <button type="submit">Cadastre-se</button>
        </form>
        <p>Já possui uma conta? <a href="./login.php">Login</a></p>
    </div>

    <script>
        setTimeout(function() {
            var errDiv = document.querySelector('.err');
            if (errDiv) {
                errDiv.style.display = 'none';
            }
        }, 4000);
    </script>

    <?php include "../incs/rodape.inc"; ?>
</body>
</html>
