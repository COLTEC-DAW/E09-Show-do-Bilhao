<?php

if($_SESSION['autenticado'])
{
    echo "<li>Ola <b>" . $_SESSION['user']->obter_nome() . "</b>!</li>";
    echo "<li><a href='/login.php'>Sair</a></li>";
}
else
    echo "<li><a href='/login.php'>Entrar</a></li>";

?>