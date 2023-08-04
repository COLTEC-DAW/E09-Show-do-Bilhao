<?php include 'init.inc'; ?>
<?php

$novo_user  = new Gerenciador_de_Usuario($_POST['name'], $_POST['email'], $_POST['user'], $_POST['passwd']);
$usuarios   = fopen('users.txt', 'a');
fwrite($usuarios, $novo_user->toJSON() . "\n");
fclose($usuarios);

setcookie('pontuacao_' . $novo_user->obter_login(), 0);
setcookie('errou_' . $novo_user->obter_login(), "false");

?>
<p>Conta criada com sucesso!</p>
<?php include 'menu.inc'; ?>
<?php include 'rodape.inc'; ?>
