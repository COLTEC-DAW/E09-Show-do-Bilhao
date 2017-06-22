<?php
	error_reporting(0);
	date_default_timezone_set('America/Sao_Paulo');
	setcookie("ultimaHoraJogado", date("d/m/Y h:i:s"));

	if($_COOKIE["perguntaAtual"] != null || $_COOKIE["perguntaAtual"] != 0){
?>
	<h1>YOU FAIL</h1><br>

<img src="you_lose.gif"><br>
	
	<p><?php echo $_COOKIE['ultimaPontuacao'];?>/6 perguntas acertadas</p>

	<?php
		setcookie("perguntaAtual", null);
	?>

	<form action="logout.php">
		<input type="submit" value="Log out">
	</form>

<?php
	} else{
?>
	<h1>QUANDO VOCÊ TENTAR BURLAR O JOGO, EU VOU ESTAR LÁ</h1>

	<form action="index.php">
	<input type="submit" value="Log in">
<?php
	}
?>