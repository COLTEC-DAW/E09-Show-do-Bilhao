<?php 

	$str = file_get_contents('C:\xampp\htdocs\users.json');
	$json = json_decode($str, true);

	$login = $_POST["login"];
	$senha = $_POST["senha"];

	for($i=0;$i<sizeof($json);$i++){
		if($json[$i]["Login"] == $login && $json[$i]["Senha"] == $senha){
			session_start();
			$_SESSION["nome"] = $login;
			header("Location: index.php");
			exit;
		}
	}
    header("Location: erro.html");	
?>