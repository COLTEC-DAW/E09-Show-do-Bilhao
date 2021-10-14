<?php
/*
 * Recebe sentenças de código que geram links ($links) e as agrupa em um 
 * menu ($menu) para depois retorná-lo com uma linha horizontal (<hr>).
 *
 */
function menu ()
{  
    // links recebidos como parâmetro.
    $links = func_get_args(); 
    $menu = "";
    // concatena todos os links para formar o menu
    for($i = 0; $i < func_num_args(); $i++){
        $menu = $menu.$links[$i]."<br>";
    }
    // retorna o menu
    return $menu."<hr>";
}   
