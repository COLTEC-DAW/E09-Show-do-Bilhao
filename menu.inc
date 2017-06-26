<h1 style="text-align: center;color: #7cfc00;text-shadow: 2px 2px darkgreen">$how do Bilhão</h1>
<?php
	//session_start();

	if($_SESSION["login"] == null){
		header("location: anticheat.php");
	}

	$username = $_SESSION["login"];
	echo "<h2>$username, quer ser um bilionário?</h2>";
?>