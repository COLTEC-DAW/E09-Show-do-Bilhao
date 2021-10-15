<?php

$login = $_POST["login"];
$senha = $_POST["senha"];

setcookie("login", $login);
setcookie("senha", $senha);

if($login == "" || $senha == "")
    echo "voce nao esta logado";
else
    include "perguntas.inc";

?>