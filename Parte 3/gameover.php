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

		<h1>Você perdeu</h1>

		<?php echo '<div class="col-md-12" style="text-align: center;"><a id="result" class="btn btn-primary btn-large" href="resultados.php">Ver Resultados</a></div>'; ?>

		<div id="footer" class="col-md-12">
			<?php include 'rodape.inc';?>
		</div>

		</div>	
	</div>
</body>
</html>