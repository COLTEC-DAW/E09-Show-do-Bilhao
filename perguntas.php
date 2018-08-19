<?php

    function carregaPergunta($id){
        $json = new JsonDAO("Perguntas.json");
        return $json->getPergunta($id);
    }

?>