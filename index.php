<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>Show do Bilhão</title>
        <meta charset="utf-8">
    </head>
    <body>
        
        <?php

        	include("topo.inc");

        	require 'perguntas.inc';

        	for ($i = 0 ; $i < count($per) ; $i++)
        	{
            	echo "<h3>".$per[$i]."</h3>";
            	echo "<ol>";
            	for ($j=0 ; $j < 4 ; $j++)
            	{
	                echo "<li>".$alternativa[$i][$j]."</li>";
            	}
	            echo "</ol>";
        	}
			
			include("rodape.inc");
			
		?>

        </div>
    </body>
</html>