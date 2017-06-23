<?php

    require 'perguntas.inc';

	$resp = $_POST['resp'];
	$rsp = $_POST['rsp'];
	$id = $_POST['ident'];


	if($resp == $rsp){
		if(($id+1)==6){
			header('Location: win.php');
		}
		else{
			header('Location: perguntas.php?id='.($id+1));
		}
	}
	else{
			header('Location: lost.php');
	}
?>
