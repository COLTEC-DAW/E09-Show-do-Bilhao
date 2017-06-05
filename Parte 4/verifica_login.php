<?php

	$login = $_POST["nome"];
	$senha = $_POST["senha"];
	if ($login == "lucas"||$senha == "123") {
		$redirect = "http://localhost/E09-Show-do-Bilhao-master/perguntas.php?id=0";
		header("location:$redirect");
	} else {
		$redirect = "http://localhost/E09-Show-do-Bilhao-master/login.php";
		header("location:$redirect");
	}

?>