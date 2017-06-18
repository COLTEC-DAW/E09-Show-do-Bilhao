<?php
	require 'classes.php';

	function retorna_resposta($id){
		global $certa;
		return $certa[$id];
	}

	function armazena($id){

		$cont = 0;

		$arquivo = fopen("perguntas.json", "r");
		while(!feof($arquivo)) {
			$linha = fgets($arquivo);
			if($linha!=null){
				if($cont==$id){
					$aux = json_decode($linha);
					$enunciado = $aux->{'enunciado'};
					$alternativas = $aux->{'alternativas'};
					$resp = $aux->{'resposta'};
					$questao = new Question($enunciado, $alternativas, $resp);
				}
				$cont++;
			}
		}
		fclose($arquivo);
		return $questao;
	}

	function perguntaArquivo($id,$dados){


		echo "<h3>".$dados->enunciado."</h3>";	
		echo '<form action="checa.php" method="post">';
		
?>
		<input type="hidden" name="ids" value=<?=$id?>>
		<input type="hidden" name="certa" value=<?=$dados->resposta?>>
<?php					
		for($i=0;$i<4;$i++){
?>			
			<div class="radio">												
				<label><input type="radio" name="optradio" value="<?=$i?>"><?=$dados->alternativas[$i]?></label>
			</div>
<?php
		}
?>
	<input type="submit" name="Verificar">
	</form>
<?php
	}
?>