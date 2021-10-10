<!DOCTYPE html>
<html>
    <head>
        <title>Jogo do Bilhão</title>
    </head>
    <body>
        <form action="" method="post">
            
            <?php

                require "perguntas.inc";
    
                // Pega os valores da pergunta anterior e a alternativa selecionada anteriormente ( ifs são para não dar warning na primeira pergunta)
                if ( !empty($_POST['perguntaAnterior'])) {  $numPerg = (int)$_POST['perguntaAnterior'];}
                if ( !empty($_POST['alternativa'])) {  $altMarcada = (int)$_POST['alternativa'];}


                // Checa se as variáveis estão indefinidas, e as preenche com 0 (para não dar warning na primeira pergunta)
                if ( empty($numPerg)) {  $numPerg = 0; }
                if ( empty($altMarcada)) {  $altMarcada = 0; }


                // Confere se a opção anterior estava correta
                if (autenticaOpcao($altMarcada, $numPerg) == true ){

                    carregaProgresso($numPerg);
                    // e, se sim, carrega a próxima pergunta
                    carregaPergunta($numPerg);

                }
                else {
                    echo "<p> oops, something went wrong :( </p>";
      
                }
            ?>
        </form>
    </body>
</html>
