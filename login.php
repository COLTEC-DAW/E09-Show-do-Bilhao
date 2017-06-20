<?php
	ob_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<title>Dá Bilhão?</title>
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

					//Verifica login e senha
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
						echo '<h4 class="center-align">Ta errado isso ai.</h4>';
					} else {
						echo '<h4 class="center-align">Este usuario n existe.</h4>';
					}

					exit;	
				}
			?>
			
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