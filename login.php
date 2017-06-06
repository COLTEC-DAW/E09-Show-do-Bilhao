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
	<?php
		//prompt function
		function prompt($prompt_msg){
			echo("<script type='text/javascript'> var answer = prompt('".$prompt_msg."'); </script>");

			$answer = "<script type='text/javascript'> document.write(answer); </script>";
			return($answer);
		}

		//program
		$prompt_msg = "Parece que você não está autenticado. Insira seu username:";
		$username = prompt($prompt_msg);
		session_start();
		$_SESSION["username"] = $username;
		echo "
				<script>
					window.location.replace('/index.php');
				</script>
			";		
	?>
	<main>
		<div class="container">
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