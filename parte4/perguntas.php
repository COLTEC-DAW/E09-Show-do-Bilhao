<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Show do Bilhão</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" href=	"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css">
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" ></script>
	<link rel="stylesheet" href="/css/index-style.css">
</head>
<body>
	<div class="container-fluid">
		<div class="row">
  			<div class="col-md-12">
  				<?php
  					session_start();
  					include "cookie.php";

  					// caso não fez login
					if(!isset($_SESSION["nome"])){
						$_SESSION["nome"] = $_POST["nome"];
						echo 'nome: ' . $_SESSION["nome"];
					}
					// 
					else{
						echo 'já logou : ' . $_SESSION["nome"];
					}
 
					//pega resposta
					if(!count($_POST))
							$id = 0;
					else
						$id = $_POST['id'];

					include 'menu.inc';
					require 'perguntas.inc';

					if($id>0){
		                if(!checaResposta($id,$_POST['resposta'])){
		                	salvaData($id);
		                	header("location:gameover.html");
		                }
		            }

					if($id<5){
						mostraPergunta($id);
					}
					else{
						echo '<p>Jogo Terminado.</p>';
						salvaData(5);
					}				
					include 'rodape.inc';

					$nome = $_SESSION["nome"];
					echo "</br>";

					if(isset($_COOKIE['data'])){
						echo $_COOKIE['data'];
						echo "max pont: " . $_COOKIE['pontos'];
					}
					
					echo "
					<form action ='logoff.php' method='post'>
						<input type='hidden' name='pontos' value='" . $id . "'>"?>
      					<input type="submit" name="log" value="logoff">
					</form>
			</div>
		</div>
	</div>
</body>
</html>