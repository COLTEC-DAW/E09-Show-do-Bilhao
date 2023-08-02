<?php include 'init.inc'; ?>
<?php include 'menu.inc'; ?>
<?php

$novo_user  = new Gerenciador_de_Usuario($_POST['name'], $_POST['email'], $_POST['user'], $_POST['passwd']);
$usuarios   = fopen('users.json', 'a');
fwrite($usuarios, $novo_user->toJSON() . "\n");
fclose($usuarios);

?>
<p>Conta criada com sucesso!</p>
<?php include 'rodape.inc'; ?>
