<?php
	require 'classes.php';

	function validar($login, $senha) {
		$arquivo = fopen("files/users.json", 'r');
		$arquivoDados = "";
		while(!feof($arquivo)) {
			$arquivoDados .= fgets($arquivo);
		}
		$arquivoDadosJSON = json_decode($arquivoDados);
		fclose($arquivo);

		//Verifica login e senha
		foreach ($arquivoDadosJSON as $pessoa) {
			if($pessoa->login == $login && $pessoa->senha == $senha) {
				return true;
			}
		}

		return false;
	}
?>
