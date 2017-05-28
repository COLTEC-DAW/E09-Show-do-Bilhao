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
					if($_GET["id"]<5)
                    {
						mostraPergunta($_GET["id"]);
						$tag = '<a class="btn btn-primary btn-large" href="perguntas.php?';
						echo $tag . str_replace("0",$_GET['id']+1,'id=0"') . '>Próxima pergunta</a>' . '</br>';
					}
					else
						echo '<p>Você terminou o jogo!</p>';
				?>

				<?php include 'rodape.inc';?>
			</div>
		</div>
	</div>
</body>
</html>