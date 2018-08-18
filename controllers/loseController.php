<?php
    require '../models/dao/usuariosDAO.php';
    require '../models/classes/usuariosClass.php';
    Usuarios::atualizarPerdeu($_COOKIE['usuario'], true);
    header("Cache-Control: no-cache, must-revalidate");
    header("Location: ../pages/derrota.php");
?>