<?php
	ob_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<title>Show do milhão</title>
	<link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<!--Import materialize.css-->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/css/materialize.min.css">
	<link rel="stylesheet" href="css/main.css">

	<!--Let browser know website is optimized for mobile-->
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>
<body>
	<?php include 'menu.inc'; ?>
	<main>
		<div class="container">
			<?php require 'login.inc';

			
				if ($_POST["login"] != NULL) {
					$usuarios_file = file_get_contents("files/usuarios.json");
					$usuarios_file_decoded = json_decode($usuarios_file);

					$usuario_existe = FALSE;

					//L ogin e senha
					foreach ($usuarios_file_decoded as $usuario) {
						var_dump($usuario->login);
						if($usuario->login == $_POST["login"] && $usuario->senha == $_POST["senha"]) {
							$usuario_existe = TRUE;
							session_start();
							$_SESSION["username"] = $_POST["login"];
							header("Location: index.php");
							exit;
						}
					}

					if ($usuario_existe) {
						echo '<h4 class="center-align">Senha ou usuário inválidos.</h4>';
					} else {
						echo '<h4 class="center-align">Não existe esse usuário.</h4>';
					}

					exit;	
				}
			?>
			<main>

<center>
	 

	 <h5 class="indigo-text">Please, login into your account</h5>
	 <div class="section"></div>

	 <div class="container">
	   <div class="z-depth-1 grey lighten-4 row" style="display: inline-block; padding: 32px 48px 0px 48px; border: 1px solid #EEE;">

		 <form class="col s12" method="post">
		   <div class='row'>
			 <div class='col s12'>
			 </div>
		   </div>

		   <div class='row'>
			 <div class='input-field col s12'>
			 <input id="login" type="text">
			 <label for="login" class="">Digite seu Login</label>
			 </div>
		   </div>

		   <div class='row'>
			 <div class='input-field col s12'>
			   <input class='validate' type='password' name='senha' id='senha' />
			   <label for='senha'>Digite sua senha</label>
			 </div>
			 <label style='float: right;'>
							   <a class='pink-text' href='usuarios.json'><b>Esqueceu a senha?</b></a>
						   </label>
		   </div>

		   <br />
		   <center>
			 <div class='row'>
			   <button type='submit' name='btn_login' class='col s12 btn btn-large waves-effect indigo'>Login</button>
			 </div>
		   </center>
		 </form>
	   </div>
	 </div>
	 <a href="cadastro.php">Criar conta</a>
   </center>

		</div>
	</main>


	<?php include 'rodape.inc';	?>

	<!--Import jQuery before materialize.js-->
	<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/js/materialize.min.js"></script>
	<script>
		$(document).ready(function() {
    		$('select').material_select();
		});
	</script>
</body>
</html>