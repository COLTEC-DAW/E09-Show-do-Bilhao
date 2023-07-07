<?php

    require "usuarios.inc.php";
    require "perguntas.inc.php";
    include "menu.inc";
    session_start();

    if(!isset($_SESSION["usuario"])){
        header("Location: index.php");
        exit();
    }

    $usuarioM = $_SESSION["usuario"];
    $usuario = unserialize($usuarioM);
    $nomeCOOKIE = "lastSession" . $usuario->username;

    $nomeCOOKIEacerto = "lastAcertos" . $usuario->username;

    if(isset($_COOKIE[$nomeCOOKIE])){
        $lastSession = $_COOKIE[$nomeCOOKIE];
    }else{
        $lastSession = "Não possuimos informações.";
    }
    
    if(isset($_COOKIE[$nomeCOOKIEacerto])){
        $lastAcertos = $_COOKIE[$nomeCOOKIEacerto];
    }else{
        $lastAcertos = 0;
    }

    if(isset($_POST["logout"])){

        
        setcookie($nomeCOOKIE);
        setcookie($nomeCOOKIE, date("d/m/Y H:i:s"));


        session_unset();
        session_destroy();

        header("Location: index.php");
        exit();
    }


    if(isset($_POST["id"])){
        $id = $_POST["id"];
    } else {
        $id = 0;
    }

    if(isset($_POST["acertos"])){
        $acertos = $_POST["acertos"];
    } else {
        $acertos = 0;
    }

    if($id < 0){
        echo '<form id="gameOverForm" action="gameOver.php" method="post">
            <input type="hidden" name="acertos" value="' . $acertos . '">
            </form>
            <script>document.getElementById("gameOverForm").submit();</script>';
    } else if($id > 4){

        setcookie($nomeCOOKIEacerto);
        setcookie($nomeCOOKIEacerto, 5);
        
        header("Location: winner.php");
        exit();
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show do Bilhão</title>
</head>
<body>
    <h1>Bem-vindo, <?php echo $usuario->username; ?>!</h1>
    <p>Última sessão: <?php echo $lastSession; ?></p>
    <p>Última pontuação: <?php echo $lastAcertos; ?></p>

    <h2>Questão <?php echo $id + 1 ?></h2>
    
    <?php
        $questao = carregaPergunta($id);
        $id++;
        
        echo $questao->enunciado . "<br><br>";

        echo '<form action="jogo.php?id=' . $id . '" method="post">';
        foreach ($questao->alternativas as $key => $alternativa) {
            if($key == $questao->resposta){
                
                if ($id > 0) {
                    $acertos++;
                }
                echo '<input type="radio" name="id" value="' . $id . '" required>' . $alternativa . "<br>";
            } else {
                echo '<input type="radio" name="id" value="-2" required>' . $alternativa . "<br>";
            }
        }
        echo '<input type="hidden" name="acertos" value="' . $acertos . '">
            <input type="submit" value="Prox">
            </form>';

        if($acertos != 0){
            echo $acertos - 1 . ' acertos </p>';
        }
    ?>

    <form method="post" action="jogo.php">
        <input type="submit" name="logout" value="Logout">
    </form>

    <?php include "rodape.inc";?>
</body>
</html>