<?php 
    function exibeDerrota(){
        $telaDerrota = 
        '
        <img src="https://www.vhv.rs/dpng/d/200-2008543_game-over-png-rpg-transparent.png" alt="Game Over" width="200" height="200">
        <br>
        <p> 
            Resposta errada, você perdeu!
            <br>
            <a href="index.php"> Voltar ao menu inicial </a>    
        </p>
        ';

        return $telaDerrota;
    }
?>