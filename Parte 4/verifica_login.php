<?php

  	session_start();


	$login = $_POST["nome"];
	$senha = $_POST["senha"];
	if ($login == "lucas"&&$senha == "123") {

		$_SESSION["login"] = $login;
		$_SESSION["senha"] = $senha;


		$redirect = "perguntas.php?id=0";
		header("location:$redirect");
	} else {
		$redirect = "login.php";
		header("location:$redirect");
	}

?>