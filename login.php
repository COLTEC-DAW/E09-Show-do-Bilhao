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

        function formNaoVazio(array $camposRequeridos) {
            foreach($camposRequeridos as $campoAtual) {
                if (!postNaoVazio($campoAtual)) return false;
            }

            return true;
        }

        echo "<form method='POST'/>";
            echo "<input type='text' name='nomeLogin' placeholder='Nome de login'/><br/>";
            echo "<input type='password' name='senhaLogin' placeholder='Senha'/><br/><br/>";
            echo "<input type='submit' value='Entrar' name='botaoLogin'/>";
        echo "</form>";

        echo "<br/><br/><h1>Registrar novo usuário</h1>";

        echo "<form method='POST'/>";
            echo "<input type='text' name='nomeRealRegistro' placeholder='Nome de usuário'/><br/>";
            echo "<input type='password' name='senhaRegistro' placeholder='Senha'/><br/>";
            echo "<input type='text' name='email' placeholder='Email'/><br/>";
            echo "<input type='text' name='nomeRegistro' placeholder='Nome de login'/><br/><br/>";
            echo "<input type='submit' value='Registrar' name='botaoRegister'/>";
        echo "</form>";

        if(isset($_POST['botaoLogin'])) 
            if (formNaoVazio(array('nomeLogin', 'senhaLogin')))
                entraUsuario();
            else
                echo "<br/><p class='mensagem-erro'>Todos os campos devem ser preenchidos!</p>";

        if (isset($_POST['botaoRegister']))
            if(formNaoVazio(array('nomeRealRegistro', 'senhaRegistro', 'email', 'nomeRegistro')))
                registraUsuario();
            else
                echo "<br/><p class='mensagem-erro'>Todos os campos devem ser preenchidos!</p>";
    ?>
</body>
</html>