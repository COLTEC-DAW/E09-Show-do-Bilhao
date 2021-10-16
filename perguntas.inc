<?php
    $enunciados = array(
        0 => '<br><br> Biologia: Existe pessoas com determinado tipo sanguíneo que são consideradas doadores universais.<br>
        Que tipo sanguíneo essa pessoa possui?<br> <br>',
        1 => 'English: Choose the alternative that indicates the plural of the words: fish, life, woman.<br> <br>',
        2 => 'História: A formação dos Estados Modernos fez desaparecer os laços de suserania e vassalagem e, <br>
        com isso, foram formado(as), na Europa:<br> <br>'
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
                    echo("<br> RESPOSTA... CERTA <br>");
                    echo("Perguntas respondidas corretamente: ");
                    echo(++$pergunta);
                    $aux++;
                }
            }
        }
        if($aux == 0){
            //errou a resposta.
            gameOver();
            return false;
        }
        return true;
    }
    /**
     * Função que mostra ao jogador que ele venceu o jogo e retorna a página inicial.
     */
    function acabarJogo(){
        echo("VOCÊ VENCEU O JOGO! PARABÉNS.");
        echo '</br>';
        echo '<a href="./index.php"> Clique aqui. </a> ';
    }
    /**
     * Função que redireciona para a página do GameOVer.
     */
    function gameOver(){ include 'gameOver.php'; }
    
    /** Função que redireciona para a página inicial; */
    function redireciona(){     
        header('Status: 301 Moved Permanently', false, 301);
        header('Location: http://localhost/ShowDoBilhão_Laiza/index.php');
    }
    /** Função que verifica se o arquivo está vazio. */
    function arqVazio($arquivo){
        if (filesize('users.txt') == 0){    
            $message = "Arquivo Vazio ";
            echo "<script type='text/javascript'>alert('$message');</script>";
            redireciona();
        } 
    }
    /**
     * Função que verifica se o usuário existe;
     */
    function verificaUser($arquivo, $login){ 
        $aux = false;
        while(!feof($arquivo)) {
            $linha = fgets($arquivo);
            if( strpos($linha, $login) !== false) {
                // encontrou o usuário
                return $linha; // retorna a linha/string contendo as informações do usuario;
                $aux = true;
            }      
        }
        if($aux == false){
            $message = "Usuário não encontrado. ";
            echo "<script type='text/javascript'>alert('$message');</script>";
            redireciona();
        }
    }
    /**
     * Função que atualiza o arquivo;
     * Com as novas pontuações e a ultima data de acesso;
     */
    function atualizaArquivo($array, $id){ 
        // atua a pontuação e o dia;
        $array[4] = date("d/m/Y");
        $array[5] = ++$id; 

        $arquivo = fopen("users.txt", "a+"); 
        
        $i = 0;
        // copiando todas as linhas do arquivo para um array de linhas.
        while(!feof($arquivo)) {
            $arrayArquivo[$i] = fgets($arquivo);  
            $i++;
        } 
        

        // comparando cada linha desse array com o login e senha do array passado como parametro. 
        for($i = 0; $i < count($arrayArquivo); $i++){
            $aux = explode(" ", $arrayArquivo[$i]);
            
            if($aux[0] == $array[0] && $aux[1] == $array[1]){ 
                // login e senha bateu
                /**for($i = 0; $i < count($array); $i++){
                    echo($array[$i]);
                    echo '<br>';
                }*/
                $aux = implode(" ", $array); // transformando o $aux em string de novo, só que agora atualizada.              
                $arrayArquivo[$i] = $aux; // atualizou 
            }
        }

        //apagando o conteúdo do $arquivo 
        ftruncate($arquivo, 0);


        // reescreve o conteudo do arquivo
        for($i=0; $i < count($arrayArquivo); $i++){
            fwrite($arquivo, $arrayArquivo[$i]);
        }  
        $arquivo = $arquivo;      
    }
?>