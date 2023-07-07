<?php
    $game->addUsuario();
?>
<form action="../../index.php" method="POST" class="login">
    <label for="login" class="login--label">Login: </label>
    <input type="text" name="login" class="login--input">

    <label for="senha" class="login--label">Senha: </label>
    <input type="password" name="senha" class="login--input">
    
    <input type="submit" class="login--botao">

    <button class="login--botao"><a href="MVC/Views/cadastro.php">cadastrar</a></button>
</form>
