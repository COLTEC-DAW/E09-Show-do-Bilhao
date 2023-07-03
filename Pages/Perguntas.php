<?php
session_start();
require "../Componentes/menu.inc";
require "../Controllers/usersController.php";
global $usuario;
print_r($usuario->nome);
require "../Controllers/perguntasController.php";

if($imprimePergunta){
    require "../Componentes/pergunta.inc";
}
require "../Componentes/rodape.inc";
?>
