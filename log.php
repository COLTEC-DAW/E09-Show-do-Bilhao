<?php include 'init.inc'; ?>
<?php

if($_SESSION['autenticado'])
    include 'trechos/confirmacao_logout.inc';
else
    include 'forms/forms_login.inc';

?>
<?php include 'trechos/menu.inc'; ?>
<?php include 'trechos/rodape.inc'; ?>
