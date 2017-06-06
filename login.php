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
			echo('
				<form action="login.php" method="POST">
					<input id="usrnmField" type="hidden" name="username" value="">
					<input type="submit" name="Enviar" class="btn">
				</form>
				<script>
					var answer = "";
					answer = prompt("'.$prompt_msg.'");
					alert(answer)
					document.getElementById("usrnmField").value = answer;

				</script>
			');
			return($answer);
		}

		$prompt_msg = "Parece que você não está autenticado. Insira seu username:";
		prompt($prompt_msg);
		$username = $_POST["username"];
		session_start();
		$_SESSION["username"] = $username;
		echo "
			<script>
				/*document.forms[0].submit(function(e){
					e.preventDefault();
					this.submit();
					//window.location.replace('/index.php');
				})*/
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