<?php
    $username = $_POST['user'];
    $password = $_POST['pass'];

    if($username == 'dener' and $password == '12345') {
        header('Location: ../pages/perguntas.html');
    } else {
        header('Location: ../pages/login.html');
    }
?>