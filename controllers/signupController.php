<?php
    require '../models/dao/usuariosDAO.php';
    require '../models/classes/usuariosClass.php';

    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $user = htmlspecialchars($_POST['user']);
    $pass = htmlspecialchars($_POST['pass']);
    $confirm = htmlspecialchars($_POST['confirm']);
    $users = new Usuarios($name, $email, $user, $pass);

    echo $users->adicionarUsuario($confirm);
?>