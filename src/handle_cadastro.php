<?php
    function insert_into_json($object, $nome_arquivo){
	    $arquivo = fopen($nome_arquivo, 'w');
            $primeira_linha = fgets($arquivo);
	     
	    fclose($arquivo);
    }
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $senha = $_POST["senha"];
    $login = $_POST["login"];
    $dado_usuario = json_encode(array('nome' => $nome, 'email' => $email, 'senha' => $senha, 'login' => $login));
    var_dump($dado_usuario);

?>
