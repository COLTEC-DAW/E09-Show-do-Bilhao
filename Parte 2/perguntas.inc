<?php
	 //PERGUNTA 1
    $enunciado[0] = 'Quem era o homem mais sedutor do mundo?';
    $alternativa[0][0] = 'Dom Juan';
    $alternativa[0][1] = 'Dom Antônio';
    $alternativa[0][2] = 'Dom Marcos';
    $alternativa[0][3] = 'Dom Carlos';
    $resposta[0] = 0;

    //PERGUNTA 2
    $enunciado[1] = 'De quantos anos é constituído um século?';
    $alternativa[1][0] = '50';
    $alternativa[1][1] = '100';
    $alternativa[1][2] = '1000';
    $alternativa[1][3] = '1500';
    $resposta[1] = 1;

    //PERGUNTA 3
    $enunciado[2] = 'Qual é o coletivo de cães?';
    $alternativa[2][0] = 'Matilha';
    $alternativa[2][1] = 'Rebanho';
    $alternativa[2][2] = 'Cardume';
    $alternativa[2][3] = 'Manada';
    $resposta[2] = 0;

    //PERGUNTA 4
    $enunciado[3] = 'Segundo a Bíblia, em que rio Jesus foi batizado por João Batista?';
    $alternativa[3][0] = 'Rio Nilo';
    $alternativa[3][1] = 'Rio Sena';
    $alternativa[3][2] = 'Rio Reno';
    $alternativa[3][3] = 'Rio Jordão';
    $resposta[3] = 3;

    //PERGUNTA 5
    $enunciado[4] = 'Qual o nome dado à criança ainda não batizada?';
    $alternativa[4][0] = 'Pagão';
    $alternativa[4][1] = 'Anão';
    $alternativa[4][2] = 'Chorão';
    $alternativa[4][3] = 'Cristão';
    $resposta[4] = 0;

	function mostraPergunta($id){
		global $enunciado;
		global $alternativa;
		echo "<h3>" . $enunciado[$id] . "</h3>";
			echo "<ul>";
			for($j=0;$j<4;$j++)
				echo "<li>" . $alternativa[$id][$j] . "</li>";
		echo "</ul>";
	}
?>