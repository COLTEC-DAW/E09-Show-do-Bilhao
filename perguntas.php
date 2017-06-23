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

			$geral = armazenaClasses($_GET["id"]);

    		if($_GET["id"]<5)
    		{
				pedeArquivo($_GET["id"],$geral);
				setcookie('pontuacao', $_GET["id"]);
    		}
    		else
    		{
    			setcookie('pontuacao', $_GET["id"]);
	        	echo "Acabou o jogo.";
	    	}
		?>
 </body>
 </html>