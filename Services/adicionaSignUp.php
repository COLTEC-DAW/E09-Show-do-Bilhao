<?php

require "../Models/UserBanco.inc";

$nome = $_POST["nome"];
$login = $_POST["login"];
$senha = $_POST["senha"];
$email = $_POST["email"];
$nomeArquivo = $_SERVER['DOCUMENT_ROOT'] . '/Data/users.json';

$usersJson = file_get_contents($nomeArquivo);
$usersArray = json_decode($usersJson, true);

$novoUser = new  UserBanco($nome, $login, $senha, $email);

array_push($usersArray, $novoUser);
$data = json_encode($usersArray, JSON_PRETTY_PRINT); 

file_put_contents($nomeArquivo, $data);
require "../Componentes/login.inc";
?>