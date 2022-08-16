<?php

// function Login(){
//     echo "<form action='menu.php' method='post'>";
//     echo "<p>Por favor, informe seu nome de Usuario: </p>";

//     echo "<input type=text name='login'>";
//     echo "<input type=submit></form>";
// }

function Perguntar($id, $perguntas, $respostas){
    echo "<form action='menu.php' method='post'>";
    echo "<input type=hidden value='{$id}' name='pergunta'><p>{$perguntas[$id]}</p>";
    echo "<br>";

    echo "<input type=checkbox value='0' name='resposta'>  <span>A) {$respostas[$id][0]}</span> </input>  <br>";
    echo "<input type=checkbox value='1' name='resposta'>  <span>B) {$respostas[$id][1]}</span> </input>  <br>";
    echo "<input type=checkbox value='2' name='resposta'>  <span>C) {$respostas[$id][2]}</span> </input>  <br>";
    echo "<input type=checkbox value='3' name='resposta'>  <span>D) {$respostas[$id][3]}</span> </input>  <br>";
    echo "<br>";

    echo "<input type=submit></form>";
}

?>