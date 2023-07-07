<?php
session_start();

require "../../backend/Controllers/perguntasController.php";

if($imprimePergunta){
    require "../Componentes/menu.inc";
    require "../Componentes/pergunta.inc";
}
require "../Componentes/rodape.inc";
?>
