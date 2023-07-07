<?php

include 'classe_usuario.inc';
include 'classe_pergunta.inc';
session_start();

if(!isset($_SESSION['autenticado']))
    $_SESSION['autenticado']    = false;

?>
