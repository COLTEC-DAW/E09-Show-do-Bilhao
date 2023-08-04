<?php include 'init.inc'; ?>
<?php

if($_SESSION['autenticado'])
{
    $alternativa = $_POST['alternativa'];
    $resposta    = $_POST['resposta'];
    $pontuacao   = $_COOKIE['pontuacao_' . $_SESSION['user']->obter_login()];

    if($pontuacao == 5)
    {
        require 'trechos/pagina_vitoria.inc';
    }
    elseif($alternativa == $resposta)
    {
        setcookie('pontuacao_' . $_SESSION['user']->obter_login(), $pontuacao + 1);
        require 'trechos/pagina_acerto.inc';
    }
    else
    {
        setcookie('errou_' . $_SESSION['user']->obter_login(), "true");
        require 'trechos/pagina_erro.inc';
    }
}
else
{
    require 'trechos/nao_autenticado.inc';
}

?>
<?php include 'trechos/menu.inc'; ?>
<?php include 'trechos/rodape.inc'; ?>
