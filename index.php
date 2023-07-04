<?php 
    require("user.php");
    require("login.inc");
?>
<!DOCTYPE html>

<html lang="pt-br">

    <head>
        <title> Show do Bilhao </title>
        <meta charset="UTF-8">
    </head>

    <body>
        <h1> Show do Bilhao </h1>
        <p> Seja bem vindo ao jogo <strong>Show do Bilhao do PrateEnlouquecer</strong>! </p>
        <div style="<?php
            if(isset($_SESSION['user'])){
                echo "display:none;";
            }
        ?>">
            <form method="POST">
                <label>LOGIN :<br></label>
                <input type="text" name="login">
                <label><br><br> SENHA :<br></label>
                <input type="password" name="senha"><br><br>
                <input type="submit" name="logar" value="Login">
                <input type="submit" name="registrar" value="Resgistrar">
            </form>  
        </div>
        <div style="<?php
            if(!isset($_SESSION['user'])){
                echo "display:none;";
            }
        ?>">
            <p> <em> explicação <em>: O Show do Bilhão é um programa idealizado pela emissora SBT (Sistema Belo-Horizontino de Televisão). Neste programa, um candidato
                escolhido da audiência é submetido a uma sequência de 5 perguntas de conhecimento geral. A medida em que o candidato responde 
                cada pergunta ele avança no jogo. O jogo termina quando o candidato responde uma pergunta incorretamente. Após o término do jogo
                o sistema calcula a pontuação final do candidato. Sua pontuação é dada pela quantidade de perguntas respondidas corretamente pelo
                candidato. O proprietário da emissora requisitou que você desenvolvesse uma aplicação web que gerencie as perguntas do jogo. 
                Mais especificamente, esse sistema irá fazer o controle das respostas do jogo.
            </p>    
            <form action="perguntas.php" method="POST">
                <input type="submit" value="Jogar">
                <input type="hidden" name="numQuestao" value="0">
            </form>            
            <form method="POST">
                <input type="submit" name="logOut" value="Deslogar">
            </form>
        </div>

    </body>
</html>