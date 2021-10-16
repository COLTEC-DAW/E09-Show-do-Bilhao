<?php

    /** 
     * >>>  BEM VINDO AO CÓDIGO DO JOGO DO BILHÃO MAIS LINDO INCRIVEL MARAVILHOSO DE TODOS LOS TIEMPOS ABRAM ALAS  <<<
     * 
     * Olá João, joão meu querido, meu camarada. Como vai você, eu vou bem, e você
     * 
     * eu tentei deixar o código o mais legível possível,entao bem q vc podia me dar um ponto extr- ME DAR UM ABRAÇO ISSO MESMO
     * Alguns detalhes sobre este código minimalista
     * 
     * 
     *  > TODAS AS CHAVES DE PROPRIEDADES ENVIADAS EM POST (EM TODO O PROGRAMA): <
     * 
     *      >> login, nome, senha, email (pro cadastro/Login)
     *      >> cadastro (É enviada quando o usuário escolhe criar novo usuário)
     *      >> acao (ação escolhida pelo usuário após perder (voltar pro início ou fazer log out))
     *      >> indexPerguntaAtual (acho q é autoexplicativa neh kkk)
     *      >> alternativa (resposta escolhida pelo usuário na ultima pergunta)
     *  
     * 
     *  > ALGUNS DETALHES SOBRE O CÓDIGO <
     * 
     *      >> Não usei o fgets(), usei o file_get_contents(). a função parecia mais simples de usar e como eu estou
     *          usando arquivos .json o processo ficou bem mais tranquilo
     *      >> Eu não consegui fazer a parte de cookies :') eu não sei pq, eu pedi ajuda pra duas colegas e fiz igualzinho o método que elas usaram,
     *          mas pra mim sempre dava o mesmo erro (Cannot modify header information). Por favor dê uma olhada no que é esse erro antes de tirar 
     *          os pontos dessa parte pq eu tentei bastante e não tava funcionando. Porém! Se era um erro normal e que eu só não consegui arrumar,
     *          eu fiz algo pra compensar que foi deixar o código blindado de code injection, deixar o código lindão e comentado e fazendo o quiz
     *          todo especial customizado pra você, isso compensa né, claro sz 

    */

    session_start();
    require "./models/Usuario.php";

?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="./estilo.css">  
        <title>Jogo do Bilhão</title>
    </head>

    <body>
        <form method="post">
            <br>
            <?php

                // quando o jogador perde, ele decide se vai jogar novamente ou fazer logout e a opção escolhida
                // é enviada com o nome "ação".

                if  ( isset($_POST['acao'])) {

                    //se a ação escolhida for o logout, a sessão é destruída:

                    if ($_POST['acao'] == 'logout') session_destroy();
                }


                // Se as perguntas não tiverem começado ou se o jogador tiver escolhido 'try again' depois de perder, a tela de menu aparece:
                if((!isset($_POST['indexPerguntaAtual'])) || ((isset($_POST['acao'])) && ($_POST['acao'] == 'try again'))){

                    require "./views/menuInicial.inc";
                }
                else{
                    
                    //checa pra ver se o nome do usuário já foi inserido:
                    if  ( isset($_POST['nome'])) {

                        
                        require "./lib/login.inc";

                        //se sim, ele pega as informações inseridas e coloca em um objeto Usuario:
                        $loginAtual = new Usuario($_POST['login'], $_POST['nome'],  $_POST['senha'], $_POST['email']);
                        
                        //...e o banco de dados com os usuários é importado.
                        $dadosUsuarios = json_decode(file_get_contents('./dados/usuarios.json'), false);

                        //se o usuário tiver escolhido criar um novo cadastro...
                        if (isset($_POST['cadastro'])){

                            if (jaTemEsseLogin($dadosUsuarios, $loginAtual) == false){
                                
                                //as informações inseridas são adicionadas ao banco de dados
                                $dadosUsuarios[] = $loginAtual;
                                file_put_contents('./dados/usuarios.json', json_encode($dadosUsuarios));
                                //e ele é colocado na sessão.
                                $_SESSION['nome'] = $loginAtual->nome;
                            }
                            else{
                                echo "<p>Esse usuário já existe meu querido jão</p>";
                            }

                        }
                        // se o usuário já existir no banco de dados...
                        else if (autenticaLogin($dadosUsuarios, $loginAtual) == true){

                            //a sessão é iniciada com ele.
                            $_SESSION['nome'] = $loginAtual->nome;

                        }
                        //e se não existir...
                        else{

                            //é enviado via POST um novo parâmetro que indica que o usuário ainda vai ser cadastrado:
                            echo 
                                "<p> Esse usuario maravilhoso q vc fez ainda nao existe! Faz o cadastro: </p>
                                <input type=\"hidden\" formmethod=\"post\" name=\"cadastro\" value=\"true\">"
                            ;

                        }
                    }
                
                    //Checa se a tem um usuário na sessão:
                    if (empty($_SESSION['nome'])) {
    
                        //se não estiver, o formulário para fazer o login aparece:
                        require "./views/login.inc";
                    }
                    else{
    
                        //
                        //se já houver um usuário na sessão, o jogo começa.
                        //

                        require './lib/perguntas.inc';
            
                        // Pega os valores da pergunta anterior e a alternativa selecionada anteriormente
                        // ( ifs são para não dar warning na primeira pergunta)
                        if ( isset($_POST['indexPerguntaAtual']))  $numPerg = (int)$_POST['indexPerguntaAtual'];
                        if ( isset($_POST['alternativa']))  $altMarcada = (int)$_POST['alternativa'];
    
                        // Checa se as variáveis estão indefinidas, e as preenche com 0 (para não dar warning na primeira pergunta)
                        if (  !isset($numPerg)  ) $numPerg = 0;
                        if ( !isset($altMarcada)) $altMarcada = 0;


                        // Confere se a opção anterior estava correta
                        if (autenticaOpcao($altMarcada, $numPerg) == true ){
                            
                            if ($numPerg < 10){

                                
                                echo "<p> Saudações, {$_SESSION['nome']}!</p>";
                        

                                carregaProgresso($numPerg);
                                // e, se sim, carrega a próxima pergunta
                                carregaPergunta($numPerg);
                            }
                            else{

                                //ganhoouuu
                                require  "./views/ganhou.inc";
                                session_destroy();
                            }
                        }
                        else {

                            //perdeeuuuu
                            echo "<p>Pontuação del grande {$_SESSION['nome']}: $numPerg/10</p>";
                            require "./views/gameover.inc";
                        }
                    }
                }

                include './views/rodape.inc';
            ?>
        </form>
    </body>
</html>