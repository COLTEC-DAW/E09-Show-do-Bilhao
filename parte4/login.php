<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Show do Bilhão</title>

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css">
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" ></script>
	<link rel="stylesheet" href="/css/index-style.css">
</head>
<body>
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12">
				<div class="jumbotron">
					<h2>
						Show do Bilhão!
					</h2>
					<p>
						Faça login!
					</p>
				
					<img src="http://imgsapp.diariodepernambuco.com.br/app/noticia_127983242361/2016/05/10/643641/20160510103231460315e.jpeg"/>
					</br>


					<form action='log.php' method='POST'>
						<input type='hidden' name='id' value='0'>
						<label for="usr">Nome:</label>
						<input type="text" name='nome' class="form-control" id="usr">
						<label for="pwd">Senha:</label>
						<input type="password" class="form-control" id="pwd">
						<input type='submit' value='submit'/>
					</form>

					<form action='cad.php' method='POST'>
						<input type='hidden' name='id' value='0'>
						<label for="nome">Nome:</label>
						<input type="text" name='nome' class="form-control" id="nome">
						
						<label for="email">Email:</label>
						<input type="text" name='email' class="form-control" id="email">
						
						<label for="login">Login:</label>
						<input type="text" name='login' class="form-control" id="login">
						
						<label for="pwd">Senha:</label>
						<input type="password" class="form-control" id="pwd">
						<input type='submit' value='submit'/>
					</form>

				</div>
			</div>
		</div>
	</div>
</body>
</html>