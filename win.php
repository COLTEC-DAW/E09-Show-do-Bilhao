<?php
	date_default_timezone_set('America/Sao_Paulo');
	setcookie("ultimaHoraJogado", date("d/m/Y h:i:s"));	
?>

<h1>YOU WIN</h1><br>
<img src="trofeu.gif">
<br><p>6/6 perguntas acertadas</p>

<?php
	setcookie("perguntaAtual", null);
?>

<form action="logout.php">
	<input type="submit" value="Log out">
</form>