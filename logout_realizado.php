<?php include 'init.inc'; ?>
<?php

setcookie('tempo_ultimo_login_' . $_SESSION['user']->obter_login(), date("H:i:s \d\o \d\i\a d/m/Y"));

?>
<?php include 'menu.inc'; ?>
<?php
session_unset();
session_destroy();

?>
<p>Saida efetuado com exito!</p>
<?php include 'rodape.inc'; ?>