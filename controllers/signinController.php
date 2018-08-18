<?php
    require '../models/dao/usuariosDAO.php';
    require '../models/classes/usuariosClass.php';

    $user = htmlspecialchars($_POST["user"]);
    $pass = htmlspecialchars($_POST["pass"]);
    $erro = Usuarios::autentica($user, $pass);

    if($erro == 0) {
        setcookie('usuario', $user);
        session_start();
    }

    echo $erro;
?>