<?php include 'init.inc'; ?>
<?php

if(isset($_POST['name']))
{
    $novo_user  = new Gerenciador_de_Usuario($_POST['name'], $_POST['email'], $_POST['user'], $_POST['passwd']);
    $usuarios   = fopen('users.txt', 'a');
    fwrite($usuarios, $novo_user->toJSON() . "\n");
    fclose($usuarios);

    setcookie('pontuacao_' . $novo_user->obter_login(), 0);
    setcookie('errou_' . $novo_user->obter_login(), "false");
    include 'trechos/conta_criada.inc';
}
else
{
    include 'trechos/erro_dados.inc';
}

?>
<?php include 'trechos/menu.inc'; ?>
<?php include 'trechos/rodape.inc'; ?>
