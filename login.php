<?php
$redirect_to = "index.php";

// se POST, então usuário quer realizar login
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    session_start();
    
    $_SESSION["user"] = $_POST["login"];
    $redirect_to = "pergunta.php?id=0";
}


// redireciona para a página após verificações
header("Location: $redirect_to");