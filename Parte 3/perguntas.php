<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Show do Milhão</title>

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" href=	"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css">
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" ></script>
	<link rel="stylesheet" href="/css/index-style.css">
</head>
<body>
	<div class="container-fluid">
		<div class="row">
  			<div class="col-md-12">
				<?php include 'menu.inc';?>
					<?php require 'perguntas.inc';
						$redirect = "gameover.html";

						if($_POST['id'] > 0)
						{
							if(!checaResposta($_POST["id"], $_POST['resposta']))
								header("location: $redirect");
						}
						
						if($_POST["id"]<5)
							mostraPergunta($_POST["id"]);
						
						else
							echo '<p>Jogo Terminado.</p>';
					?>
				<?php include 'rodape.inc';?>
			</div>
		</div>
	</div>
</body>
</html>