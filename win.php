<h1>YOU WIN</h1><br>
<img src="trofeu.gif">
<br><p>6/6 perguntas acertadas</p>

<?php
	date.date_timezone_set("AMERICA");
	setcookie("ultimaHoraJogado", date("d/m/Y h:i:s"));
?>

<form action="logout.php">
	<input type="submit" value="Log out">
</form>