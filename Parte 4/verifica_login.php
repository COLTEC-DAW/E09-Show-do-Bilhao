<?php

	$login = $_POST["nome"];
	$senha = $_POST["senha"];
	if ($login == "lucas"&&$senha == "123") {
		$redirect = "perguntas.php?id=0";
		header("location:$redirect");
	} else {
		$redirect = "login.php";
		header("location:$redirect");
	}

?>