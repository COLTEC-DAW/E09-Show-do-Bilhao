<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Dá Bilhão?</title>
</head>
<body>
	<?php include 'menu.inc'; ?>

	<?php require 'perguntas.inc';
		carregaPerguntas($_GET["id"]);


	?>

	<?php include 'rodape.inc'; ?>

</body>
</html>