<?php 
    // Importe de classes
    require "Models\\User.php";

    // Importe de funcionalidades
    include "Lib\\Menu.inc"; 
    include "Lib\\rodape.inc";

    // Inicialização da sessão
    session_start();

    // Exibe um aviso de sucesso na criação da conta
    if(isset($_GET['code'])){
        echo "Conta criada com sucesso! Agora efetue seu login.";
    }

    // Exibe um aviso de erro na criação da conta
    if(isset($_GET['error'])){
        if($_GET['error'] == 0){
            echo "Email/senha inválidos.";
        }else if($_GET['error'] == 1){
            echo "O nome de usuário " . $_GET['user'] . " não foi encontrado.";;
        }
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>

    <!-- Estilo do jogo -->
    <link rel="stylesheet" href="./style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <!-- Parte superior -->
    <?php echo GetMenu() ?>

    <!-- Forms -->
    <div class="LoginForm">
        <form action="index.php" method="post">
            <fieldset>
                <legend>Dados do jogador:</legend>
                    Username:       <input type="text" size="30" name="username"><br>
                    E-mail:&#160;&#160;&#160;&#160;&#160;&#160;         <input type="text" size="30" name="email"><br>
                    Password:       <input type="password" name="password"> <br>
                </fieldset>
            <input type="submit" value="Login">
        </form>
    </div>

    Não possui uma conta? Clique <a href="cadastro.php">aqui</a> para criar uma!
    <!-- Parte inferior -->   
    <?php echo GetFooter() ?>
</body>
</html>