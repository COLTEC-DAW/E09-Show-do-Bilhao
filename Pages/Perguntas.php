<?php
session_start();

require "../Controllers/usersController.php";
require "../Controllers/perguntasController.php";

if($imprimePergunta){
    require "../Componentes/menu.inc";
    require "../Componentes/pergunta.inc";
}
require "../Componentes/rodape.inc";
?>
