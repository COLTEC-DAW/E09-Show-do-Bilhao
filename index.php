<!DOCTYPE html>
<html>
<head>
	<title>Show do Bilhão</title>
	<meta charset="utf-8">
</head>
<body>
	<form action="setup.php" method="POST">
		Login: <input type="text" name="login"> <br>
		Senha: <input type="password" name="senha"> <br>
		<input type="Submit" name="submit"> <br>
	</form>
	<?php
		setcookie("perguntaAtual", 0);
	?>
</body>
</html>