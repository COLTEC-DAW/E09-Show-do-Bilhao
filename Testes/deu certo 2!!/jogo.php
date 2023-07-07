<?php
    require "usuarios.inc.php";
    session_start();

    if(!isset($_SESSION["usuario"])){
        header("Location: index.php");
        exit();
    }

    $usuarioM = $_SESSION["usuario"];
    $usuario = unserialize($usuarioM);
    $nomeCOOKIE = "lastSession" . $usuario->username;

    if(isset($_COOKIE[$nomeCOOKIE])){
        $lastSession = $_COOKIE[$nomeCOOKIE];
    }else{
        $lastSession = "Não possuimos informações.";
    }

    if(isset($_POST["logout"])){

        
        setcookie($nomeCOOKIE);
        setcookie($nomeCOOKIE, date("d/m/Y H:i:s"));
        session_unset();
        session_destroy();

        header("Location: index.php");
        exit();
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>teste</title>
</head>
<body>
    <h1>Bem-vindo, <?php echo $usuario->username; ?>!</h1>
    <p>Email: <?php echo $usuario->email; ?></p>
    <p>Nome: <?php echo $usuario->nome; ?></p>
    <p>Senha: <?php echo $usuario->senha; ?></p>
    <p>Última sessão: <?php echo $lastSession; ?></p>

    <form method="post" action="jogo.php">
        <input type="submit" name="logout" value="Logout">
    </form>
</body>
</html>