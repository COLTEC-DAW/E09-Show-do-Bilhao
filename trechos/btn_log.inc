<?php

if(isset($_SESSION['autenticado']) && $_SESSION['autenticado'])
{
    echo "<li>Ola <b>" . $_SESSION['user']->obter_nome() . "</b>!</li>";
    echo "<li><a href='/log.php'>Sair</a></li>";
}
else
    echo "<li><a href='/log.php'>Entrar</a></li>";

?>