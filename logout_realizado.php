<?php include 'init.inc'; ?>
<?php

if($_SESSION['autenticado'])
{
    setcookie('tempo_ultimo_login_' . $_SESSION['user']->obter_login(), date("H:i:s \d\o \d\i\a d/m/Y"));
    session_unset();
    session_destroy();
    include 'trechos/saida_realizada.inc';
}
else
{
    include 'trechos/nao_autenticado.inc';
}

?>
<?php include 'trechos/menu.inc'; ?>
<?php include 'trechos/rodape.inc'; ?>
