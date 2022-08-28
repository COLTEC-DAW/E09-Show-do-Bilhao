<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show do Bilhão</title>
    </head>
    <body>
        <?php
        $menu = "partials/menu.inc";
        $footer = "partials/rodape.inc";

        if(is_readable($menu)) include $menu;
        ?>
		<div class="login">
			<h1>Bem vindo(a) ao show do Bilhão!</h1>
			<form action="authenticate.php" method="post">
				<label for="username"></label>
				<input type="text" name="username" placeholder="username" id="username" required>
				<label for="password"></label>
				<input type="password" name="password" placeholder="password" id="password" required>
				<input type="submit" value="Login">
			</form>
		</div>
        <?php
        if(is_readable($footer)) include $footer;
        ?>
    </body>
</html>