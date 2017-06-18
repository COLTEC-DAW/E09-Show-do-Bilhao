<?php
	include "cookie.php";
	if($_POST['log'] == 'logoff'){
		session_start();
		session_destroy();
		salvaData($_POST['pontos']);
		header("Location:index.php");
	}
?>