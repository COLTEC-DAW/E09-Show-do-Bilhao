<?php
session_destroy();
include "perguntas.inc";
$_POST = array();
validaCookies('-', '-');

header("Location: ./login.php");
?>