<?php
	ob_start();
?>
<?php
	echo '
	<h3 class="center-align">Cadastro:</h1>

	<form action="cadastro.php" method="post">
		<input name="nome" type="text" placeholder="nome" required />	
		<input name="email" type="text" placeholder="email" required />	
		<input name="login" type="text" placeholder="login" required />	
		<input name="senha" type="password" placeholder="senha" required />
		<div class="row">
			<input type="submit" name="Enviar" class="btn col s12 blue">
		</div>
	</form>
	';
?>