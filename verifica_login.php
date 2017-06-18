<?php

  	session_start();


	$login = $_POST["nome"];
	$senha = $_POST["senha"];

	if ($login == "dybala" && $senha == "dybalation") {

		$_SESSION["login"] = $login;
		$_SESSION["senha"] = $senha;

		header("location:perguntas.php?id=0");

	} else {

		header("location:login.php");
	}


?>