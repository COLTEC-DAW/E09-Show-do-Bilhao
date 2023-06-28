<?php 
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" href="style.css">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h1> Fazer login </h1>
    <?php
        require('usuario.inc');
        echo "<form method='POST'/>";
            echo "<input type='text' name='nomeLogin' placeholder='Nome de usuário'/><br/>";
            echo "<input type='password' name='senhaLogin' placeholder='Senha'/><br/><br/>";
            echo "<input type='submit' value='Entrar' name='botaoLogin'/>";
            echo "<input type='submit' value='Registrar' name='botaoRegister'/>";
        echo "</form>";
        
        if(isset($_POST['nomeLogin'])){
            header ("Location:index.php?id=0");
        }

        if(isset($_POST['botaoRegister'])) {
            registraUsuario();
        }
        
        if(isset($_POST['botaoLogin'])) {
            $usuarioEncontrado = procuraUsuario();

            if ($usuarioEncontrado) {
                $_SESSION['loginAtual'] = $usuarioEncontrado;
            }
            else {
                echo "<script type='avisoNaoEncontrado'>alert('Usuário ou senha incorretos!')</script>";
            }
        }
    ?>
</body>
</html>