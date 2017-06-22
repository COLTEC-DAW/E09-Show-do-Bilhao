<?php
    ob_start(); // Initiate the output buffer
  	session_start();
?>

<?php
	if($_SESSION["login"]=="lucas" && $_SESSION["senha"]=="123"){
	}
	else{
		$redirect = "login.php";
		header("location:$redirect");
	}
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

			<div class="col-md-12 jumbotron">
				<?php include 'menu.inc';?>
			</div>

			<div class="col-md-12">
				<?php
					if($_GET["id"]==5)
						echo "<h4>Progresso: 5 de 5</h4>";
					else{
						$progresso = $_GET["id"] +1;
						echo "<h4>Progresso: ".$progresso." de 5</h4>";
					}
				?>
			</div>

			<div class="col-md-12">
				<?php require 'perguntas.inc';
					if($_GET["id"]<5){
						$proximo_id = $_GET["id"] + 1;
						$link = "perguntas.php?id=".$proximo_id;
						carregaPergunta($_GET["id"], $link);
					}
					else{
						setcookie('pontuacao', $_GET["id"]);
						echo '<h1>Você venceu!!</h1>';
						echo '<div class="col-md-12" style="text-align: center;"><a id="result" class="btn btn-primary btn-large" href="resultados.php?id=0">Ver Resultados</a></div>';
					}
				?>
			</div>

			<div id="proximo" class="col-md-12">
				<?php
					if($_GET["id"]<5){
						//variaveis importantes
						$id = $_GET["id"];
						$resposta = retorna_resposta($id);
						setcookie('id', $id);
						setcookie('resposta', $resposta);
					}
				?>
			</div>

			<div class="col-md-12m">
				<?php
					if($_COOKIE['ultima_pontuacao']){
						echo '<h3>Ultima pontuação: '.$_COOKIE['pontuacao'].'</h3>';
						echo '<h3>Jogou pela ultima vez '.$_COOKIE['data'].'</h3>';
					}
					else{
						echo '<h3>Ultima pontuação: 0</h3>';
					}
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