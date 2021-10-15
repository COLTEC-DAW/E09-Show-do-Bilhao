
<?php

    function equalUsuarios($obj1, $obj2){

        if (($obj1->login == $obj2->login) && ($obj1->nome == $obj2->nome) && ($obj1->senha == $obj2->senha) && ($obj1->email == $obj2->email)){

            return true;
        }
        else{
            return false;
        }
    }

    function autenticaLogin($usuarios, $loginAtual){

        foreach ($usuarios as $usuarioCadastrado){

            if (equalUsuarios($usuarioCadastrado, $loginAtual)){
                
                return true;
            }
        }
        return false;
    }
?>
