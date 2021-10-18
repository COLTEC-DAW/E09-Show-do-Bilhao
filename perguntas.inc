<?php
    function carregaPergunta($id){
        require 'listaPerguntas.inc';
        $listaPerguntas[$id]->printSelf();
    }
?>