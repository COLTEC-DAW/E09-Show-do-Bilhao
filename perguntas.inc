<?php

    session_start();

    define("NUM_QTS", 4);

    function verificaResultado($escolha, $id){

        $stringArquivo = file_get_contents("./perguntas.json");
        $infoArquivo = json_decode($stringArquivo);
        $perguntaPassada = new Question();
        
        $perguntaPassada = $infoArquivo[$id - 1];

        if($perguntaPassada->indiceCorreta == $escolha){

            return true;

        }  
        else {

            return false;

        }      

    }

    function carregaPergunta($id){
    
        $stringArquivo = file_get_contents("./perguntas.json");
        $infoArquivo = json_decode($stringArquivo);

        if($id > NUM_QTS){ 

            $id++;
            carregaFim($id);
            
        }
        else{

            return $infoArquivo[$id];
        
        }

    }

    function carregaFim($id){

        $id--;

        echo "<h3>FIM DE JOGO!</h3>";

        if($id == 0){

            echo "<p>Você não acertou nenhuma questão :(</p>";

        }
        elseif($id == 1){

            echo "<p>Você acertou 1 questão!</p>";

        }
        elseif($id == (NUM_QTS + 1)){

            echo "<p>Você acertou todas as $id questões! Parabéns!</p>";

        }
        else {

            echo "<p>Você acertou $id questões!</p>";

        }

        echo '<form action="./perguntas.php" method="post">
                    <div>
                        <input type="submit" value="Jogar Novamente">
                        <input type="hidden" value="0" name="id">
                        <input type="hidden" value="0" name="escolha">
                    </div>
                </form>
                
                <form action="./index.php" method="post">
                    <div>
                        <input type="submit" value="Desconectar" id="saiDaqui">
                    </div>
                </form>';

    }

?>