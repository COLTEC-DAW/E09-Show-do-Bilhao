<?php
    function tela_final($ganhou) {
        if($ganhou) {
            ?>
                <!-- =============== -->
                <h3 class="tela_final">PARABENS VOCE VENCEU</h3>
                <!-- =============== -->
            <?php
        }
        else {
            ?>
            <!-- =============== -->
                <h3 class="tela_final">GAME OVER</h3>
            <!-- =============== -->
            <?php
        }
    }
?>