<?php 
                
    function pergunta($num_pergunta, $perguntas, $alternativas){

        $dados = [];

        array_push($dados, $perguntas[$num_pergunta]);

        for($i = 0; $i < count($alternativas[$num_pergunta]); $i++){
                    
            array_push($dados, $alternativas[$num_pergunta][$i]);

        }

        return $dados;

    }
?>