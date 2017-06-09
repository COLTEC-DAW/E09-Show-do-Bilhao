<?php
    session_start();

    if(!isset($_SESSION["login"]) && !isset($_SESSION["senha"])){ //confere se ta logado
        header('Location: index.php');
    }
    
    echo "Nome: " .$_SESSION["nome"]."<br>";
    echo "Email: " .$_SESSION["email"]."<br>";
    echo "Login: " .$_SESSION["login"]."<br><br>";

    if(isset($_COOKIE[$_SESSION["login"].'date'])){
        echo "Último login: " . $_COOKIE[$_SESSION["login"].'date'];
    }
    else{
        echo "Último login: Nenhum";
        
    }

    if(isset($_COOKIE[$_SESSION["login"].'lastpt'])){
        echo "<br><br>Última pontuação: ". $_COOKIE[$_SESSION["nome"].'lastpt'];
    }
    else{
        echo "<br><br>Última pontuação: Nenhuma";        
    }
?>

<br><br><a class='btn btn-primary btn-large' href='perguntas.php?id=0'>Continuar</a>