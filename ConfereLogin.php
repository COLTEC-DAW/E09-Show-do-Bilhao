<?php
	
	$nome=$_POST['nome'];
	$senha=$_POST['pwd'];
	setcookie("Login", $nome);

	$fp = fopen("users.json", "r");
	$info = file_get_contents("users.json");
	$jsonObj = json_decode($info);

	for($i=0; $i<sizeof($jsonObj);$i++){
		if($jsonObj[$i]->login == $nome && $jsonObj[$i]->senha == $senha){ //logou
			session_start();
			$_SESSION["nome"] = $nome;
			$_SESSION["senha"] = $senha;
			date_default_timezone_set('America/Sao_Paulo');
			setcookie("data", date('d/m/Y H:i:s'));

			fclose($fp);
			header("Location: perguntas.php?id=0");
		}

	}

	echo "<script>alert('Login ou senha inválidos! Tente novamente!');</script>";
	fclose($fp);

?>