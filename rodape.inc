<?php

function rodape (){
    // dados recebidos como parâmetro
    $informacoes = func_get_args();
    $rodape = "";
    // concatena todos os dados para formar o rodapé
    for($i = 0; $i < func_num_args(); $i++){
        $rodape = $rodape.$informacoes[$i]."<br>";
    }
    // retorna o rodapé
    return "<hr>".$rodape;
}

