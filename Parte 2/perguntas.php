<!DOCTYPE html>
<html>
<head>
	<title>Show do Bilhão</title>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" ></script>
	<meta charset="utf-8">
</head>
<body>
		<?php
			include "menu.inc";
			require 'perguntas.inc';

	    	function arrumaLinkProxima(){
        		$prox = ''; 
        		echo $prox . str_replace("0",$_GET['id']+1,'<button type="button" class="btn btn-primary" onclick="location.href = \'perguntas.php?id=0\' ;">PRÓXIMA PERGUNTA</button>') . '</br>';
	    	}

    		if($_GET["id"]<5){
				carregaPerguntas($_GET["id"]);
	        	arrumaLinkProxima();
    		}
    		else {
	        	echo "Acabou o jogo.";
	    	}
		?>
 </body>
 </html> 