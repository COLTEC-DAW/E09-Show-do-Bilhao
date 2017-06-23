<form action="verifica_login.php" method="post">

   	<label>Login:</label>
	<input type="text" name="nome">

   	<label>Senha:</label>
	<input type="text" name="senha">

	<input type="submit" name="Verificar">

</form>


	<?php

		if(isset($_COOKIE['falha']))
		{
			if($_COOKIE['falha']==0)
			{
				echo "<h4>ERRO.</h4>";
			}
		}
	?>
	<a href = "cria.php"><button>Criar conta</button></a>