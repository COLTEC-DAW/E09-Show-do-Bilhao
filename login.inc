<?php
	ob_start();
?>
<?php
	echo '

	<form action="login.php" method="post">
		<input name="login" type="text" placeholder="login" required />	
		<input name="senha" type="password" placeholder="senha" required />	
		<input type="submit" name="Enviar" class="btn">
	</form>
	';
?>