<?php session_destroy(); ?>
<!DOCTYPE>
<html>
    <body>
        <h2>Parece que você não está logado no jogo do bilhão...</h2>
        <form action="index.php" method="post">
            Login: <input type="text" name="login">
            Senha: <input type="password" name="senha">
            <input type="submit" value="LogIn">
        </form>
        <h3>Não tem conta? </h3>
        <a href="cadastro.php">Crie uma aqui</a>
        <?php include "rodape.inc" ?>
    </body>
</html>