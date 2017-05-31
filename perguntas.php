<!DOCTYPE html>
<html lang="en">
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
		<?php require 'perguntas.inc';
			carregaPerguntas($_GET["id"]);
		?>
	</main>

	<?php include 'rodape.inc'; ?>
	<!--Import jQuery before materialize.js-->
	<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/js/materialize.min.js"></script>
</body>
</html>