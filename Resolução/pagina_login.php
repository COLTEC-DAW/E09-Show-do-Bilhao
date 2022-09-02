<?php require("classes/login.php") ?>
<?php 
	if(isset($_POST['submit'])){
		$user = new LoginUser($_POST['username'], $_POST['password']);
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="style.css">
    <title>Document</title>
</head>
<body>
    <h1>Show do Bilhão</h1>

    <h3>Tens o que é necessário para ganhar um bilhão??</h3>


    <form action="" method="post" enctype="multipart/form-data" autocomplete="off">

		<label>Nome de Usuário</label>
		<input type="text" name="username">

        <br>

		<label>Senha</label>
		<input type="password" name="password">

		<button type="submit" name="submit">Log in</button>

		<p class="error"><?php echo @$user->error ?></p>
		<p class="success"><?php echo @$user->success ?></p>
	</form>

    
</body>
</html>