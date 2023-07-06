<?php
    session_start();
?>

<h1>Login</h1>

<form action="index.php" method="POST">
    <label for="nome">Nome: </label>
    <input type="text">

    <label for="nome">Senha: </label>
    <input type="password">

    <input type="submit">
</form>