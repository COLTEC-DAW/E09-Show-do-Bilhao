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
					<form action="verifica_criacao.php" method="post">

					   	<label>Nome:</label>
    					<input type="text" class="form-control" name="name">

					   	<label>Login:</label>
    					<input type="text" class="form-control" name="nome">

					   	<label>Senha:</label>
    					<input type="password" class="form-control" name="senha">

					   	<label>Email:</label>
    					<input type="text" class="form-control" name="email">

						<input type="submit" name="Verificar">
					</form>
				</div>
			</div>
		</div>
	</div>
</body>
</html>