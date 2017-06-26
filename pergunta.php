<?php ob_start();
	//if(????){
	//	header("location: logout.php");
	//}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Show do Bilhão</title>
	<meta charset="utf-8">
</head>
<body>
	<?php
		session_start();

		include 'menu.inc';
		require 'functions.inc';
		require 'dados.inc';

		carregaPergunta($_COOKIE['perguntaAtual']);

		include 'rodape.inc';
	?>
</body>
</html>