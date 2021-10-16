<?php

	$nome = $_POST['nome'];
    $usuario = $_POST['usuario'];
    $email = $_POST['email'];
	$senha = $_POST['senha'];


    $dadosCadastro = array(
        'nome'  => $nome,
        'email' => $email,
        'usuario' => $usuario,
        'senha' => $senha
    );

    $users = fopen("users.json", "a+"); 
    $dadosJson = file_get_contents("users.json");
    $usersDecodificado = json_decode($dadosJson, true); 
    array_push($usersDecodificado, $dadosCadastro);
    $dadosCodificados = json_encode($usersDecodificado);
    $escreve = fwrite($users, $dadosCodificados);
    echo $dadosCodificados;
    header("Location: inicio.php");
    fclose($users); 

?>