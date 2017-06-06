<?php
$questoes = [
  1 => 'No poema, aparece a palavra "só", corretamente acentuada. Assinale a alternativa que contenha apenas palavras corretamente acentuadas pela mesma regra.',
  2 => 'Renato pediu empréstimo ao banco para pagamento em um ano com taxa anual real de juros de 28%. Sabendo que a inflação prevista para o período é de 7%, a taxa aparente de juros é de, aproximadamente:',
  3 => 'Dos 50 detentos de um presídio, 17 cometeram o crime de latrocínio, 32 cometeram o crime de estupro e 25 cometeram o crime de estupro, mas não o de latrocínio. Nesse caso, é correto afirmar que',
  4 => 'Considerando a anatomia humana, a cavidade abdominal é separada da torácica pelo',
  5 => 'Zeus trabalha há dois anos no posto de abastecimento de combustíveis Deuses do Olimpo Centro Automotivo, exercendo a função de frentista, executando o abastecimento de automóveis. Conforme normas de segurança e da medicina do trabalho, Zeus faz jus ao pagamento de adicional de:',
];
$respostas = [
  1 => [
    1 => "a) Cipó, quatí e dendê.",
    2 => "b) Ipê, pó e pá.",
    3 => "c) Pôs, nós e pó. CERTA",
    4 => "d) Pó, pé e arára.",
    5 => "e) Pá, pé e cipó.",
  ],
  2 => [
    1 => "a) 33%",
    2 => "b) 34%",
    3 => "c) 35%",
    4 => "d) 36%",
    5 => "e) 37% CERTA",
  ],
  3 => [
    1 => "a) 40 detentos cometeram ou o crime de latrocínio ou o crime de estupro.",
    2 => "b) 15 detentos cometeram o crime de latrocínio, mas não o de estupro.",
    3 => "c) 5 detentos cometeram os crimes de latrocínio e de estupro.",
    4 => "d) 45 detentos cometeram um ou os dois crimes (latrocínio e estupro).",
    5 => "e) 8 detentos não cometeram nem o crime de latrocínio nem o de estupro. CERTA",
  ],
  4 => [
    1 => "a) pericárdio.",
    2 => "b) fígado.",
    3 => "c) diafragma. CERTA",
    4 => "d) hipogástrio.",
    5 => "e) mediastino.",
  ],
  5 => [
    1 => "a) insalubridade, no valor de 30% calculado sobre toda a sua remuneração.",
    2 => "b) penosidade, no importe de 35% calculado sobre o salário-mínimo regional.",
    3 => "c) periculosidade, no valor de 30% calculado sobre seu salário, sem os acréscimos resultantes de gratificações prêmios ou participação nos lucros da empresa. CERTA",
    4 => "d) periculosidade, variando entre 10%, 20% ou 40% calculado sobre o salário-mínimo nacional.",
    5 => "e) transferência e risco, no valor de 25% calculado sobre o seu salário-base, sem nenhum acréscimo.",
  ],
];
$respostas_certas = [
  1 => 3,
  2 => 5,
  3 => 5, 
  4 => 3,
  5 => 3,
];


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
				echo $bauducco;
				setcookie($_SESSION["username"], $bauducco);
			}
		} else {
			echo '
					<p class="flow-text center-align">Você perdeu. Esperava mais de você.</p>
				';
				session_start();
				$bauducco = getdate()[mday].'/'.getdate()[mon].'/'.getdate()[year].'+'.($id-1);
				echo $_SESSION["username"];
				setcookie($_SESSION["username"], $bauducco);
		}
	}
?>