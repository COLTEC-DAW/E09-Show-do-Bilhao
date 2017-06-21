<?php
	
	$nome=$_POST['nome'];
	$senha=$_POST['pwd'];
	setcookie("Login", $nome);

	$fp = fopen("users.json", "r");
	$info = file_get_contents("users.json");
	$jsonObj = json_decode($info);

	require "classusuarios.php";
	//Inserir informações do json na classe usuarios 
	$Usuario = array();
	for($i=0;$i<sizeof($jsonObj);$i++){ //cria objetos usuarios
	    $Usuario[] = new Usuarios($jsonObj[$i]->nome,$jsonObj[$i]->email,$jsonObj[$i]->login,$jsonObj[$i]->senha);
	}
            

	//manipular com os objetos usuarios
	for($i=0; $i<sizeof($Usuario);$i++){
		if($Usuario[$i]->login == $nome && $Usuario[$i]->senha == $senha){ //logou
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
	echo "<script>window.location = 'jogador.html';</script>"; //volta para pag de login
	fclose($fp);

?>