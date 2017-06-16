<?php include("menu.inc"); ?>
<?php
	session_destroy();
	setcookie('PHPSESSID');
?>

<form action="index.php" method="post">
	Login: <input type="text" name="login"> <br>
	Senha: <input type="password" name="senha"> <br>

	<input type="submit" value="Entrar">
</form>

Novo aqui? <a href="/cadastro.php">Cadastre-se</a>

<?php include("rodape.inc"); ?>