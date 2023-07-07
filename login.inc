<?php 
    function verificaUsuario($nome, $senha, $caminhoArquivo){
        $arquivo = json_decode(file_get_contents($caminhoArquivo));

        foreach($arquivo as $usuario){
            if($nome == $usuario->login){
                if($senha == $usuario->senha){
                    return 0;
                }
            }
        }

        return 1;
    
    }

?>