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
				<?php require 'perguntas.inc';
					if($_GET["id"]<5){
						carregaPergunta($_GET["id"]);
					}
					else
						echo '<div class="col-md-12" style="text-align: center;"><a id="result" class="btn btn-primary btn-large" href="resultados.php?id=0">Ver Resultados</a></div>';
				?>
			</div>

			<div id="proximo" class="col-md-12">
				<?php
					if($_GET["id"]<5){
						$proximo_id = $_GET["id"] + 1;
						$link = "perguntas.php?id=".$proximo_id;
						echo '<a class="btn btn-primary btn-large" href="'.$link.'">Próxima</a>';
					}
				?>
			</div>

			<div id="footer" class="col-md-12">
				<?php include 'rodape.inc';?>
			</div>

		</div>
	</div>
</body>
</html>