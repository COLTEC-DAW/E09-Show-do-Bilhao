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

        function postNaoVazio(string $nomePost) {
            return (isset($_POST[$nomePost])) && (strlen($_POST[$nomePost]) > 0);
        }

        echo "<form method='POST'/>";
            echo "<input type='text' name='nomeLogin' placeholder='Nome de usuário'/><br/>";
            echo "<input type='password' name='senhaLogin' placeholder='Senha'/><br/><br/>";
            echo "<input type='submit' value='Entrar' name='botaoLogin'/>";
            echo "<input type='submit' value='Registrar' name='botaoRegister'/>";
        echo "</form>";

        if(postNaoVazio('nomeLogin') && postNaoVazio('senhaLogin')) {
            if(isset($_POST['botaoRegister'])) {
                registraUsuario();
            }
            
            if(isset($_POST['botaoLogin'])) {
                entraUsuario();
            }
        }
    ?>
</body>
</html>