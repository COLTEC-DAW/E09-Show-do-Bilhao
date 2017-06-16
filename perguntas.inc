<?php
	ob_start();
?>
<?php
$perguntas_file = file_get_contents("files/perguntas.json");
$perguntas_file_decoded = json_decode($perguntas_file);

$questoes = [0 => "vazio"];
$respostas = [0 => "vazio"];
$respostas_certas = [0 => "vazio"];

foreach ($perguntas_file_decoded as $questao) {
	array_push($questoes, $questao->enunciado);
	array_push($respostas, $questao->alternativas);
	array_push($respostas_certas, $questao->resposta);
}


function carregaPerguntas($id){
	global $questoes;
	global $respostas;
	global $respostas_certas;

	echo $id != 1 ?  '<p class="flow-text center-align">Alternativas certas: '.($id-1).'</p>' : '';
	
	

	echo '
	<ul class="collection with-header">
		<li class="collection-header"><h4>'.$questoes[$id].'</h4></li>
	';
	for ($k = 1; $k <= 5; ++$k){
		echo $k == $respostas_certas[$id] ? '<a href="#!" class="collection-item active">'.$respostas[$id][$k].'</a>' :  '<a href="#!" class="collection-item">'.$respostas[$id][$k].'</a>';
	}

	echo '</ul>';
	echo '
	<p></p>
	<form action="perguntas.php" method="post">
		<input name="resposta" type="radio" id="alternativa_a" value="1" />
		<label for="alternativa_a">letra a</label>

		<input name="resposta" type="radio" id="alternativa_b" value="2" />
		<label for="alternativa_b">letra b</label>

		<input name="resposta" type="radio" id="alternativa_c" value="3" />
		<label for="alternativa_c">letra c</label>

		<input name="resposta" type="radio" id="alternativa_d" value="4" />
		<label for="alternativa_d">letra d</label>

		<input name="resposta" type="radio" id="alternativa_e" value="5" />
		<label for="alternativa_e">letra e</label>

		<input type="hidden" name="questao_id" value="'.$id.'">
		<input type="submit" name="Enviar" class="btn">
	</form>
    
	';
	}

	function verificaResposta($id, $alternativa){
		global $respostas_certas;
		if ($respostas_certas[$id] == $alternativa){
			if ($id != 5) {
				carregaPerguntas($id+1);
			} else {
				echo '
					<p class="flow-text center-align">Você ganhou. Porém, não fez mais que sua obrigação.</p>
				';
				session_start();
				$bauducco = getdate()[mday].'/'.getdate()[mon].'/'.getdate()[year].'+'.'5';
				// echo $bauducco;
				setcookie($_SESSION["username"], $bauducco);
			}
		} else {
			echo '
					<p class="flow-text center-align">Você perdeu. Esperava mais de você.</p>
				';
				session_start();
				$bauducco = getdate()[mday].'/'.getdate()[mon].'/'.getdate()[year].'+'.($id-1);
				// echo $bauducco;
				setcookie($_SESSION["username"], $bauducco);
		}
	}
?>