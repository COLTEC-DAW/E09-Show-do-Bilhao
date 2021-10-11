<?php
    session_start();

?>

<!DOCTYPE html>
<html>
    <head>
        <title>Jogo do Bilhão</title>
    </head>
    <body>
        <form action="" method="post">
            
            <?php

                if  ( isset($_POST['acao'])) {

                    if ($_POST['acao'] == 'logout'){

                        echo "<p> saiu </p>";
                        session_destroy();

                    }
                }

                if ( !isset($_POST['title'])) {  $_POST['title'] = 'true'; }

                if($_POST['title'] == 'true'){

                    echo "
                    <p>bem vindo ao jogo do bilhao!</p>
                    <form action=\"\">
                        <input type=\"hidden\" name=\"title\" value=\"false\">
                        <input type=\"submit\" value=\"começar\">
                    </form>
                    ";
                }
                else{
                    
                    //checa pra ver se o nome do usuário já foi inserido:
                    if  ( isset($_POST['nome'])) {$_SESSION['usuario'] = $_POST['nome'];}
                
                    //e se ele já está na sessão.
                    if (empty($_SESSION['usuario'])) {
    
                        //se não estiver, o formulário para receber o nome aparece:
                        echo "
                        <form action=\"\" method=\"post\">
                            <p>Quem está jogando?</p>
                            <input type=\"text\" name=\"nome\">
                            <input type=\"hidden\" name=\"title\" value=\"false\">
                            <input type=\"submit\" name =\"enviar\">
                        </form>";
                    }
                    else{
    
            
                        require ".\lib\perguntas.inc";

                        $usuario = $_SESSION['usuario'];
                        
            
                        // Pega os valores da pergunta anterior e a alternativa selecionada anteriormente ( ifs são para não dar warning na primeira pergunta)
                        if ( isset($_POST['perguntaAnterior'])) {  $numPerg = (int)$_POST['perguntaAnterior'];}
                        if ( isset($_POST['alternativa'])) {  $altMarcada = (int)$_POST['alternativa'];}
    
    
                        // Checa se as variáveis estão indefinidas, e as preenche com 0 (para não dar warning na primeira pergunta)
                        if ( !isset($numPerg)) {  $numPerg = 0; }
                        if ( !isset($altMarcada)) {  $altMarcada = 0; }
    
    
                        // Confere se a opção anterior estava correta
                        if (autenticaOpcao($altMarcada, $numPerg) == true ){


                            
                            carregaProgresso($numPerg);
                            // e, se sim, carrega a próxima pergunta
                            carregaPergunta($numPerg);
    
                        }
                        else {
                            
                        

                            echo "
                                <p> game over :) </p>
                                <form action=\"\" method=\"post\">
    
                                    <input type=\"hidden\" name=\"title\" value=\"true\">
                                    <input type=\"submit\" name=\"acao\" value=\"try again\">
                                    <input type=\"submit\" name=\"acao\" value=\"logout\">
                                </form>
                            ";
                        
                        }
                    }
                }
                

            ?>
        </form>
    </body>
</html>
