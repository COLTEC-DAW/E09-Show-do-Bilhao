<?php

    $enunciados = array(
        0 => "Biologia:\nExiste pessoas com determinado tipo sanguíneo que são consideradas doadores universais.<br>
        Que tipo sanguíneo essa pessoa possui?<br>",
        1 => "English:\nChoose the alternative that indicates the plural of the words: fish, life, woman.<br>",
        2 => "História:\nA formação dos Estados Modernos fez desaparecer os laços de suserania e vassalagem e, <br>
        com isso, foram formado(as), na Europa:<br>"
    );
    $alternativas = array(
        0 => array(
            0 => '(a) O+ <br>',
            1 => '(b) O- <br>', 
            2 => '(c) AB+ <br>', 
            3 => '(d) AB- <br>' 
        ),
        1 => array(
            0 => '(a) Fishes, lifes, woman. <br>',
            1 => '(b) Fishs, lives, woman. <br>',
            2 => '(c) Fish, lives, women. <br>',
            3 => '(d) Fish, lifes, women. <br>'    
        ),
        2 => array(
            0 => '(a) os exércitos nacionais. <br>',
            1 => '(b) os burgos. <br>',
            2 => '(c) as Cruzadas. <br>',
            3 => '(d) os cavaleiros da luz. <br>'  
        )
    );
    $respostasCertas = array(
        0 => "b",
        1 => "c",
        2 => "a"
    );

    /** Função que imprime o gabarito, caso seja necessária. */
    function imprimeGab(){
        echo("<p>Gabarito: </p>");
        $j = 0;
        foreach($respostasCertas as $key => $respostaDoSer){
            echo("$j :");
            echo($alternativas[$key][$respostaDoSer]);
            $j++;
        }    
    }
    /**
     * Função que imprime cada pergunta separadamente; Ou seja, função escolhida anteriormente.
     * @param $id // = chave da pergunta
     * @param $enunciados
     * @param $alternativas
     */
    function carregaPergunta($id, $enunciados, $alternativas){
        foreach($enunciados as $key => $value){
            if($key == $id){
                echo("$value");
                for($i = 0; $i <= 3; $i++){
                    echo($alternativas[$key][$i]);
                }
            }
        }
    }
    /**
     * Função que compara a resposta do candidato com a resposta certa. 
     * @param $id
     * @param $respostasCertas
     * @param $pergunta
     */
    function confere($escolha, $respostasCertas, $pergunta){
        $aux = 0;
        foreach($respostasCertas as $key => $value){
            if($key == $pergunta){
                // se a chave das respostas certas for igual a $pergunta, que é a chave das $alternativas, 
                // então compara o $escolha da resposta escolhida com o valor da resposta certa
                if($value == $escolha){
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