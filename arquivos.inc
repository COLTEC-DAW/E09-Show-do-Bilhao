<?php
    
    function decodeperguntas(){
        $arquivo = fopen("perguntas.json","r");
        $linhas = "";
        while(!feof($arquivo)){
            $linhas .= fgets($arquivo);
        }
        $linhasdecode = json_decode($linhas);
        fclose($arquivo);
        return $linhasdecode;
    }

    function decodeuser(){
        $arquivo = fopen("usuarios.json","r");
        $linhas = "";

        while(!feof($arquivo)){
            $linhas .= fgets($arquivo);
        }

        $linhasdecode = json_decode($linhas);
        fclose($arquivo);
        return $linhasdecode;
    }
    
    function existeuser($campo, $users, $digitado){
        $tam = count($users);
        for( $i =0 ; $i < $tam ; $i++){
            if($users[$i]->$campo == $digitado){
                return true;
            } 
        }
        return false;
    }

    function verificalogin($campo, $users, $digitado){
        $tam = count($users);
        for( $i =0 ; $i < $tam ; $i++){
            if($users[$i]->$campo == $digitado){
                return $i;
            } 
        }
        return -1;
    }
    function verificasenha($users,$id,$senha){
        if($users[$id]->senha == $senha){
            return true;
        }
        else{
            return false;
        }
    }

?>