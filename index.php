<?php
session_start();
if(!isset($_SESSION["usuario_logado"])){
    header("Location: login.php");
}
if (isset($GET["sair"])){
    unset($_SESSION["usuario_logado"]);
    header("Location: login.php");
}


?> 
