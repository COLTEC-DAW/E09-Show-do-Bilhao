<?php 
function salvaData($pontos){
    date_default_timezone_set('America/Sao_Paulo');
	setcookie("data",date('l jS \of F Y h:i:s A'));
	setcookie("pontos",$pontos);
}
?>