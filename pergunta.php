<?php include 'init.inc'; ?>
<?php
if($_SESSION['autenticado'])
{
    if($_COOKIE['errou_' . $_SESSION['user']->obter_login()] == "true")
    {
        require 'trechos/pagina_erro.inc';
    }
    elseif($_COOKIE['pontuacao_' . $_SESSION['user']->obter_login()] == 5)
    {
        require 'trechos/pagina_vitoria.inc';
    }
    else
    {
        require 'forms/forms_pergunta.inc';
    }
}
else
{
    include 'trechos/nao_autenticado.inc';
}

?>
<?php include 'trechos/menu.inc'; ?>
<?php include 'trechos/rodape.inc'; ?>
