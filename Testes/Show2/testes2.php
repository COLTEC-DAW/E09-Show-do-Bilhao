<?php
    require 'pergunta.inc';

    $questao = CarregaPergunta(2);

    echo "Enunciado: " . $questao->resposta;
?>
