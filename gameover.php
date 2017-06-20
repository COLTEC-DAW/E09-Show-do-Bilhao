<?php
	if($_COOKIE["perguntaAtual"] != null){
?>
	<h1>YOU FAIL</h1><br>

<img src="you_lose.gif"><br>
	
	<p><?php echo $_COOKIE['ultimaPontuacao'];?>/6 perguntas acertadas</p>

	<?php
		date.date_timezone_set("AMERICA");
	setcookie("ultimaHoraJogado", date("d/m/Y h:i:s"));

	setcookie("perguntaAtual", null);
?>
	?>

	<form action="logout.php">
	<input type="submit" value="Log out">
</form>

<?php
	}
	else{
?>
	<form action="index.php">
	<input type="submit" value="Log in">
<?php
	}
?>