<?php include 'init.inc'; ?>
<?php

if($_COOKIE['errou_' . $_SESSION['user']->obter_login()] == "true")
{
    include 'pagina_erro.inc';
}
else
{
    include 'forms_pergunta.inc';
}

?>
<?php include 'menu.inc'; ?>
<?php include 'rodape.inc'; ?>
