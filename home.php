<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Project/PHP/PHPProject.php to edit this template
-->

   

<title>Jogo Do Bilhao</title>
<?php 
        include "menu.inc";
        include "rodape.inc";
?>

<!-- Menu -->
<?php   
    echo menu(
        "<a href='index.php'>Home</a>",
        "<a href='provaDeConceito.php'>Prova de Conceito</a>"
    );
?>
<?php
    if(isset($_COOKIE["lastPonctuation"])){
        $lastPonctuation = htmlspecialchars($_COOKIE['lastPonctuation']);
        $dateLastPlay = htmlspecialchars($_COOKIE['dateLastPlay']);
        echo"Última pontuação: $lastPonctuation pts; ($dateLastPlay);";                   
    }
?>
<br>
<a href="?logout">Fazer Logout</a><br><br>
<form action='jogo.php' method='post'>
<input type='hidden' name='questAtual' value='0'>
<input type='submit' value='Start Game'>
</form>
            

<!-- Rodapé -->
<?php   
    echo rodape("Developed by ",
        "O incrível",
        "O inigualável",
        "O magnânimo",
        "O inexorável",
        "O estupendo",
        "IAGO!!!");


