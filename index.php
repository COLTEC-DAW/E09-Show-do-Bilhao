<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Project/PHP/PHPProject.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Jogo Do Bilhao</title>
        <?php 
        include "menu.inc";
        include "rodape.inc";
        ?>
    </head>
    <body>
        <!-- Menu -->
        <?php   
            echo menu(
                "<a href='index.php'>Home</a>",
                "<a href='provaDeConceito.php'>Prova de Conceito</a>"
            );
        ?>
        <form action="jogo.php" method="post">
            <input type="hidden" name="questAtual" value="0">
            <input type="submit" value="Start Game">
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
    ?>
    </body>
</html>
