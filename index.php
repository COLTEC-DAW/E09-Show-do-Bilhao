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

                // quando o jogador perde, ele decide se vai jogar novamente ou fazer logout e a opção escolhida
                // é enviada com o nome "ação".

                if  ( isset($_POST['acao'])) {

                    //se a ação escolhida for o logout, a sessão é destruída:

                    if ($_POST['acao'] == 'logout'){

                        session_destroy();
                    }
                }


                // Se as perguntas não tiverem começado ou se o jogador tiver escolhido 'try again' depois de perder, a tela de menu aparece:
                if((!isset($_POST['indexPerguntaAtual'])) || ((isset($_POST['acao'])) && ($_POST['acao'] == 'try again'))){

                    require "./lib/menuInicial.inc";
                }
                else{
                    
                    //checa pra ver se o nome do usuário já foi inserido:
                    if  ( isset($_POST['nome'])) {$_SESSION['usuario'] = $_POST['nome'];}
                
                    //e se ele já está na sessão.
                    if (empty($_SESSION['usuario'])) {
    
                        //se não estiver, o formulário para receber o nome aparece:

                        require "./lib/login.inc";
                    }
                    else{
    
            
                        require "./lib/perguntas.inc";

                        $usuario = $_SESSION['usuario'];
                        
            
                        // Pega os valores da pergunta anterior e a alternativa selecionada anteriormente
                        // ( ifs são para não dar warning na primeira pergunta)
                        if ( isset($_POST['indexPerguntaAtual'])) {  $numPerg = (int)$_POST['indexPerguntaAtual'];}
                        if ( isset($_POST['alternativa'])) {  $altMarcada = (int)$_POST['alternativa'];}
    
    
                        // Checa se as variáveis estão indefinidas, e as preenche com 0 (para não dar warning na primeira pergunta)
                        if (  !isset($numPerg)  ) {  $numPerg = 0; }
                        if ( !isset($altMarcada)) {  $altMarcada = 0; }
    
                        $dados = json_decode(file_get_contents('./dados/perguntas.json'), true);

                        // Confere se a opção anterior estava correta
                        if (autenticaOpcao($altMarcada, $numPerg, $dados) == true ){
                            
                            echo "<p> Olá, $usuario</p>";
                            carregaProgresso($numPerg);
                            // e, se sim, carrega a próxima pergunta
                            carregaPergunta($numPerg, $dados[$numPerg]);
    
                        }
                        else {
                            
                        require "./lib/gameover.inc";

                        }
                    }
                }
                

            ?>
        </form>
    </body>
</html>
