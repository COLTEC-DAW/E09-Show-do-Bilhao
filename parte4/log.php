<?php 
	if ($_POST["nome"] != NULL) {
		session_start();
		$_SESSION["nome"] = $_POST["nome"];
		header("Location: index.php");
		exit;	
	}
?>