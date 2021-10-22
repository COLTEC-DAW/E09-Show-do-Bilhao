<?php 

function exibeProgresso($nAcertos){
    $progresso = 
    '
    Progresso no jogo:' . $nAcertos . '/5
    <progress value="' . $nAcertos . '" max="5">  </progress>
    <br>
    ';
    return $progresso;
}

?>

