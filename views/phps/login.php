<?php session_start();
    require_once __DIR__ . "/../../models/user.inc";

    $method = $_SERVER['REQUEST_METHOD'];

    if ($method === 'POST') {
        if (User::loginValido($_POST['nickname'], $_POST['password'])) {
            $_SESSION['isLogged'] = json_encode(new User($_POST['nickname'], $_POST['password']));
            header('location: perguntas.php');
        } else echo "<div class='err'><p>Dados inválidos. Verifique-os e tente novamente</p></div>";
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../assets/stylish/rodape.css">
    <link rel="stylesheet" href="../../assets/stylish/card.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@40,700,0,0" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <title>Página de login</title>
</head>
<body>
    <div class="card">
        <h2>Login</h2>
        <form action="/views/phps/login.php" method="post">

        <label for="nickname">Usuario:</label>
        <input style="margin: 2px;" type="text" id="nickname" name="nickname"> <br>

        <label for="password">Senha:<label>
        <input style="margin: 2px;" type="password" id="password" name="password"> 

        <button type="submit">Submit</button>
        </form>
        <p>Ainda não possui conta? <a href="<?php echo $_SERVER['DOCUMEN_ROOT'] ?>/views/phps/cadastro.php">Clique aqui!</a></p>
    </div>

    <script>
        setTimeout(function() {
            var errDiv = document.querySelector('.err');
            if (errDiv) {
                errDiv.style.display = 'none';
            }
        }, 4000);
    </script>

    <?php require_once __DIR__ . "/../incs/rodape.inc"; ?>
</body>
</html>