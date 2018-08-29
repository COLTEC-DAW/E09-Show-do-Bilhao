<?php
	ob_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<title>Show do Milhão</title>

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
			<?php require 'cadastro.inc'; require 'classes.php';
				
				if ($_POST["nome"] != NULL) {
					$usuarios_file = file_get_contents("files/usuarios.json");
					$decoded = json_decode($usuarios_file, TRUE);

					// Dados da form em obj
					$novo_usuario = new User($_POST["nome"], $_POST["email"], $_POST["login"], $_POST["senha"]);

					// Verifica se o usuario ja existe
					$usuario_existente = FALSE;
					$jsonIterator = new RecursiveIteratorIterator(new RecursiveArrayIterator(json_decode($usuarios_file, TRUE)),RecursiveIteratorIterator::SELF_FIRST);

					foreach ($jsonIterator as $key => $val) {
						if(is_array($val)) {
			
						} else {
			
							if ($key == "login" && $val == $_POST["login"]) {
								$usuario_existente = TRUE;
								echo '<h5 class="center-align">Login já existente.</h4>';
							}
						}
					}

					if (!$usuario_existente) {
						array_push( $decoded, $novo_usuario);
						$arquivo = fopen("files/usuarios.json", 'w');
						fwrite($arquivo, json_encode($decoded, JSON_PRETTY_PRINT));
						fclose($arquivo);

						echo 'Usuario cadastrado,<a href="login.php" class=""> Clique aqui para logar</a>';
					}
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