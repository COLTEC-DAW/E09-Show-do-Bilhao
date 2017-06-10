<?php 
	function validar($login, $senha) {
		$arquivo = fopen("users.json", 'r');
		$arquivoDados = "";

		//Le o arquivo json
		while(!feof($arquivo)) {
			$arquivoDados .= fgets($arquivo);
		}

		//Decodifica JSON
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