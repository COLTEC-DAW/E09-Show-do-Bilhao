<?php
  	session_start();
?>

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
			<div class="col-md-12">
				<div class="jumbotron">
					<h1>Show do Bilhão</h1>
				</div>
				<div class="col-md-12">

				<?php
					if($_COOKIE['acaboudecadastrar']==1){
					    date_default_timezone_set('America/Sao_Paulo');

						$data = date("d/m/Y H:i:s");
						$pont = 0;

						echo '<h3>Ultima pontuação: '.$pont.'</h3>';
						echo '<h3>Jogou pela ultima vez '.$data.'</h3>';			

						setcookie("acaboudecadastrar", 0);
					}
					else{
						$user = $_COOKIE['usuario'];
						$aux = $user."data";
						$aux2 = $user."ultima_pontuacao";

						$data = $_COOKIE[$aux];
						$pont = $_COOKIE[$aux2];

						echo '<h3>Ultima pontuação: '.$pont.'</h3>';
						echo '<h3>Jogou pela ultima vez '.$data.'</h3>';
					}
				?>

				<div class="botao">
					<a class="btn btn-primary btn-large" href="perguntas.php?id=0">Iniciar</a>
				</div>

				</div>
			</div>
		</div>
	</div>
</body>
</html>