<?php include 'init.inc'; ?>
<?php

if($_SESSION['autenticado'])
{
    setcookie('tempo_ultimo_login_' . $_SESSION['user']->obter_login(), date("H:i:s \d\o \d\i\a d/m/Y"));
    session_unset();
    session_destroy();
    require 'trechos/saida_realizada.inc';
}
else
{
    require 'trechos/nao_autenticado.inc';
}

?>
<?php include 'trechos/menu.inc'; ?>
<?php include 'trechos/rodape.inc'; ?>
