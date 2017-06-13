<?php
	ob_start();
?>
<?php
	echo '
	<h3 class="center-align">Login:</h1>

	<form action="login.php" method="post">
		<input name="usrnm" type="text" id="usrnm_txt" />	
		<input type="submit" name="Enviar" class="btn">
	</form>
	';
?>