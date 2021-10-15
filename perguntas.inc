<?php
session_start();

function verificaID($id)
{
    $strJson = file_get_contents("./jsons/perguntas.json");
    $decodedJson = json_decode($strJson, true);
    // Se o valor não for numérico, for negativo ou estiver fora
    // do tamanho do array, a pergunta não é impressa
    if (!(is_numeric($id)) || $id < 0 || $id > count($decodedJson)) {
        return false;
    }

    return true;
}

function defineCookies($id)
{
    date_default_timezone_set('America/Sao_Paulo');
    setcookie(("lastGame" . $_SESSION["login"]), date("j.n.Y, g:i a"), time() + (86400 * 30), '/');
    setcookie(("lastScore" . $_SESSION["login"]), $id, time() + (86400 * 30), '/');
}
