<?php
	ob_start();
?>
<?php
	echo '
	<h3 class="center-align">Cadastro</h1>

	<form action="cadastro.php" method="post">
		<input name="nome" class="col s7" type="text" placeholder="nome" required />	
		<input name="email" type="text" placeholder="email" required />	
		<input name="login" type="text" placeholder="login" required />	
		<input name="senha" type="password" placeholder="senha" required />
		<div class="row">
			<input type="submit" name="Enviar" class="col s12 btn btn-large waves-effect indigo">
		</div>
	</form>
	';
?>