<?php
    ob_start(); // Initiate the output buffer
  	session_start();
?>

<?php
	$permissao = 0;

	$login = $_SESSION["login"];
	$senha = $_SESSION["senha"];

	/*
			LEITURA
	*/
		$arquivo = fopen("users.json", "r");
		while(!feof($arquivo)) {
			$linha = fgets($arquivo);
			if($linha!=null){
				$aux = json_decode($linha);
				$login_arq = $aux->{'Login'};
				if($login_arq == $login){
					$senha_arq = $aux->{'Senha'};
					if($senha_arq == $senha){
						$permissao = 1;
					}
				}
			}
		}
		fclose($arquivo);

		if ($permissao == 0) {
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
					setcookie('pontuacao', $_GET["id"]);

				?>
			</div>

			<div class="col-md-12">
				<?php require 'perguntas.inc';
					if($_GET["id"]<5){
						$proximo_id = $_GET["id"] + 1;
						$link = "perguntas.php?id=".$proximo_id;
						$dados = armazena($_GET["id"]);
						perguntaArquivo($_GET["id"],$dados);
					}
					else{
						echo '<h1>Você venceu!!</h1>';
						echo '<div class="col-md-12" style="text-align: center;"><a id="result" class="btn btn-primary btn-large" href="resultados.php">Ver Resultados</a></div>';
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