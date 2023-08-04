<?php include 'init.inc'; ?>
<?php
if($_SESSION['autenticado'])
{
    if($_COOKIE['errou_' . $_SESSION['user']->obter_login()] == "true")
    {
        include 'trechos/pagina_erro.inc';
    }
    elseif($_COOKIE['pontuacao_' . $_SESSION['user']->obter_login()] == 5)
    {
        include 'trechos/pagina_vitoria.inc';
    }
    else
    {
        include 'forms/forms_pergunta.inc';
    }
}
else
{
    include 'trechos/nao_autenticado.inc';
}

?>
<?php include 'trechos/menu.inc'; ?>
<?php include 'trechos/rodape.inc'; ?>
