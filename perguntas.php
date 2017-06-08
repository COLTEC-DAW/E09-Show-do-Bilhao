<?php
	session_start();
	include "head.inc";
	include "menu.inc";
	global $id;
    $id = $_GET['id'];
    include "perguntas.inc";
    carregaPergunta($id);

?>