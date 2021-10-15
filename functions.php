<?php
    /**
     * Inclusões:
     */
    include 'perguntas.inc';
    
    $escolha = $_POST['escolha'];
    $pergunta = $_POST['pergunta'];
    confere($escolha, $respostasCertas, $pergunta);
?>