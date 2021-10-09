<?php

// Retorna o HTML da página de sucesso
function GetWinHtml(){
    $str = ' <!-- Venceu -->
    <div id="Cabecalho">
        <h1 id="title"> Você venceu!!! </h1>
        <p> 100 % do quiz concluído.</p>
        <img src="./rsc/WinImage.png" alt="some text" width=60% height=auto>
    </div>';

    return $str;
}

?>