<?php

include 'classes/classe_usuario.inc';
include 'classes/classe_pergunta.inc';
session_start();

if(!isset($_SESSION['autenticado']))
    $_SESSION['autenticado']    = false;

?>
