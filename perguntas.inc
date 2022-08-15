<?php
session_start();

function verifica_id($id)
{
    $temp = file_get_contents("./perguntas.json");
    $dados_usuario = json_decode($temp, true);
    if ($id > count($dados_usuario)||!(is_numeric($id))||$id < 0) {
        return false;
    }
    return true;
}

function coloca_cookies($id)
{
    date_default_timezone_set('America/Sao_Paulo');
    setcookie(("ultimojogo" . $_SESSION["login"]), date("j.n.Y, g:i a"), time() + (86400 * 30), '/');
    setcookie(("ultimapontuacao" . $_SESSION["login"]), $id, time() + (86400 * 30), '/');
}
