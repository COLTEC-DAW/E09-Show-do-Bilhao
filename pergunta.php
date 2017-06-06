<!DOCTYPE html>
<html>
<head>
	<title>Show do Bilhão</title>
	<meta charset="utf-8">
</head>
<body>
	<?php
		include 'menu.inc';
		require 'functions.inc';
		require 'dados.inc';

		$numPergunta = $_GET["id"];
		carregaPergunta($numPergunta);

		include 'rodape.inc';
	?>
</body>
</html>