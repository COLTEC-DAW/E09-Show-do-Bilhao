<?php include 'init.inc'; ?>
<?php

$alternativa = $_POST['alternativa'];
$resposta    = $_POST['resposta'];
$pontuacao   = $_COOKIE['pontuacao_' . $_SESSION['user']->obter_login()];

if($pontuacao == 5)
{
    include 'pagina_vitoria.inc';
}
elseif($alternativa == $resposta)
{
    setcookie('pontuacao_' . $_SESSION['user']->obter_login(), $pontuacao + 1);
    include 'pagina_acerto.inc';
}
else
{
    setcookie('errou_' . $_SESSION['user']->obter_login(), "true");
    include 'pagina_erro.inc';
}

?>
<?php include 'menu.inc'; ?>
<?php include 'rodape.inc'; ?>
