<?php

// Retorna o HTML da página de erro
function GetLoseHtml(){
    $str = ' <!-- Perdeu -->
    <div id="Cabecalho">
        <h1 id="title"> Você fracassou miserávelmente!!! </h1>
        <img src="./rsc/LoseImage.png" alt="some text" width=40% height=auto>
    </div>';

    return $str;
}

?>