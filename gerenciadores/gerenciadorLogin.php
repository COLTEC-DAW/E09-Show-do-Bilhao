<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show do bilhão</title>
    <link rel="stylesheet" href="../css/reset.css">
    <link rel="stylesheet" href="../css/style.css">
</head>
<?php 
    include "../inc/interface/menu.inc"; 

    if($_POST["Cadastro"]=="Cadastro"){
        require "../inc/interface/cadastro.inc";
    }

    if($_POST["Login"]=="Login"){
        include "../inc/interface/login.inc";
    }
    
?>