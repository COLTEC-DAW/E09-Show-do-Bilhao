
<?php

    function autenticaLogin($usuarios, $loginAtual){

        foreach ($usuarios as $usuarioCadastrado){
            if ($usuarioCadastrado == $loginAtual){
                return true;
            }
        }
        return false;
    }
?>
