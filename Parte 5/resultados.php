<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css">
	<link rel="stylesheet" type="text/css" href="style.css">
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" ></script>
	<title>Show do Bilhão</title>
</head>
<body>
	<div class="container-fluid">
		<div class="row">

			<div class="col-md-12 jumbotron">
				<?php include 'menu.inc';?>
			</div>

			<div class="col-md-12">
				<?php
					$pontos = $_COOKIE['pontuacao']; 
					echo "<p>Você fez ".$pontos." pontos em 5 questões</p>";
				?>
			</div>
			<div id="deslogar" class="col-md-12" style="margin-bottom: 10px;">
				<a href = "deslogar.php"><button type="button" class="btn btn-primary">Deslogar</button></a>
			</div>
			<div id="footer" class="col-md-12">
				<?php include 'rodape.inc';?>
			</div>

		</div>
	</div>

</body>
</html>