<?php
require "Usuario/Login.php";
require "Usuario/Registro.php";

session_start();
if (isset($_POST['log'])) {
    $login = new Login($_POST['login'], $_POST['senha']);
}

if (isset($_POST['reg'])) {
    $registro = new Registro($_POST['novoLogin'], $_POST['email'], $_POST['nome'], $_POST['novaSenha']);
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/style.css">
    <title>Jogo do Bilhão</title>    
</head>

<body>
    <?php 
    include("menu.inc");
    include("rodape.inc");
    ?>

    <h1>Show do Bilhão</h1>
    <h3>O jogo do bilhão, trasmitido pela emissora SBT (Sistema Belo-Horizontino de Televisão), Consiste em 5 perguntas de conhecimentos gerais e, ao final, 
        quem responder as 5 perguntas corretamente leva UM BILHÃO de reais!!! 
        Você está preparado??</h3>

    <!-- Caso já exista uma sessão -->
    <?php if (!isset($_SESSION['logado'])) : ?>
        <div class="form"><a href="/Logar.php">Entrar</a></div>
        <div class="form"><a href="/Cadastro.php">Criar uma conta</a></div>

    
    <!-- Caso não exista uma sessão -->
    <?php else : ?>
        <form action="Quiz.php" method="get">
            <input type="submit" value="Jogar">
            <input type="hidden" name="id" value="1">
        </form>

        <a href="Usuario/Logout.php">Sair</a>
    <?php endif; ?>

</body>

</html>