<?php 

require "perguntas.inc";

if (!empty($_GET['id'])) {
    
    $ID = $_GET['id'];
    carregaPerguntas($ID);
    
}

?>