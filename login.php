<?php include("menu.inc"); ?>
<?php session_destroy(); ?>

<form action="index.php" method="post">
	Login: <input type="text" name="login"> <br>
	Senha: <input type="password" name="senha"> <br>

	<input type="submit" value="Entrar">
</form>

<?php include("rodape.inc"); ?>