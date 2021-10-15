<?php

require "perguntas.inc";

$id = htmlspecialchars($_GET['id']);

$questao = carregaPergunta($id);

// garante que o dado recebido é o esperado
if($questao != -1){
    echo $questao;
}else{
    echo "Opcao inválida";
}

