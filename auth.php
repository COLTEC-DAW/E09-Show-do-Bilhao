<?php include 'init.inc' ?>
<?php include 'menu.inc'; ?>

<?php

//  EXEMPLO

$t0         = new Gerenciador_de_Usuario();
$user       = $_POST['user'];
$senha      = $_POST['passwd'];

if($user == $t0->obter_login() && $t0->senha_correta($senha))
{
    $_SESSION['autenticado']    = true;
    $_SESSION['user']           = $t0;
    echo "Login realizado com sucesso!<br>\n";
    echo "Seja bem-vindo " . $t0->obter_nome() . "!<br>\n";
}
else
    echo "Falha na autenticacao! Tente novamente.<br>\n";

echo "<a href='index.php'>Pagina Inicial</a><br>\n";

?>

<?php include 'rodape.inc'; ?>