<?php

function Login(){
    echo "<form action='jogo.php' method='post'>";
    echo "<p>Por favor, informe seu nome de Usuario: </p>";
    echo "<input type=text name='user'><br><br>";
    echo "<input type=submit name='login' value='Login'></form>";
}

function Perguntar($id, $perguntas, $respostas){
    echo "<form action='jogo.php' method='post'>";

    echo "<input type=hidden value='{$_SESSION['user']}' name='user'>";
    echo "<input type=hidden value='{$id}' name='pergunta'><p>{$perguntas[$id]}</p>";
    echo "<br>";

    echo "<input type=checkbox value='0' name='resposta'>  <span>A) {$respostas[$id][0]}</span> </input>  <br>";
    echo "<input type=checkbox value='1' name='resposta'>  <span>B) {$respostas[$id][1]}</span> </input>  <br>";
    echo "<input type=checkbox value='2' name='resposta'>  <span>C) {$respostas[$id][2]}</span> </input>  <br>";
    echo "<input type=checkbox value='3' name='resposta'>  <span>D) {$respostas[$id][3]}</span> </input>  <br>";
    echo "<br>";

    echo "<input type=submit></form>";
}

function Ganhou(){
    echo "<h2>Voce Ganhou!!!</h2>";
    echo "Você acertou todas as perguntas!";

    echo "<form action='jogo.php' method='post'>";
        echo "<input type=hidden value='{$_SESSION['user']}' name='user'>";
        echo "<input type=submit name='voltar' value='Voltar'></form>";
}

function Perdeu(){
    echo "<h2>Voce Perdeu...</h2>";

    $_SESSION['pergunta'] = $_SESSION['pergunta'] - 1;
    echo "Você acertou {$_SESSION['pergunta']} pergunta(s).";

    echo "<form action='jogo.php' method='post'>";
        echo "<input type=hidden value='{$_SESSION['user']}' name='user'>";
        echo "<input type=hidden value='{$_SESSION['pergunta']}' name='pergunta'>";
        echo "<input type=hidden value='voltar' name='resposta'>";
        echo "<input type=submit name='voltar' value='Voltar'></form>";
}

?>