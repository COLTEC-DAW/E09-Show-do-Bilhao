<?php include 'init.inc'; ?>
<?php

if($_SESSION['autenticado'])
    require 'trechos/confirmacao_logout.inc';
else
    require 'forms/forms_login.inc';

?>
<?php include 'trechos/menu.inc'; ?>
<?php include 'trechos/rodape.inc'; ?>
