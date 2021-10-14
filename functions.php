<?php
    $id = $_POST['escolha'];
    $pergunta = $_POST['pergunta'];
    $respostasCertas = array(
        0 => "b",
        1 => "c",
        2 => "a"
    );
    
    confere($id, $respostasCertas, $pergunta);

    function confere($id, $respostasCertas, $pergunta){
        $aux = 0;
        foreach($respostasCertas as $key => $value){
            if($key == $pergunta){
                // se a chave das respostas certas for igual a $pergunta, que é a chave das $alternativas, 
                // então compara o $id da resposta escolhida com o valor da resposta certa
                if($value == $id){
                    // resposta certa
                    echo("RESPOSTA... CERTA");
                    echo ' <a href="./index.php"> Clique aqui!';
                    $aux++;
                }
            }
        }
        if($aux == 0){
            //nao bateu nenhuma resposta
            gameOver();
        }
    }
    /**
     * Função que redireciona para a página do GameOVer.
     */
    function gameOver(){ include 'gameOver.php'; }
?>