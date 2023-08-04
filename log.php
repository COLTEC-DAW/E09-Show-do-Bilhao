<?php include 'init.inc'; ?>
<?php

if($_SESSION['autenticado'])
    include 'confirmacao_logout.inc';
else
    include 'forms_login.inc';

?>
<?php include 'menu.inc'; ?>
<?php include 'rodape.inc'; ?>
