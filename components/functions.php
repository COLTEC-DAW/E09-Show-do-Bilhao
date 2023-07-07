<?php
/*FUNÇÃO EXTRA Q ERA P TESTAR P MOSTRAR QUANTAS HRS JOGADAS O PLAYER TEM -> tp steam*/
function atualizarTempoJogado()
{
    session_start();
    // tentar add tempo logout dps: date('Y/M/d H:i:s');
    if (isset($_SESSION['autenticado'], $_SESSION['last_login']) && $_SESSION['autenticado']) {
        $tempo_jogado = time() - $_SESSION['last_login'];
        $tempoUsers = [];
        if (file_exists('temp/tempoUsers.json')) {
            $tempoUsers = json_decode(file_get_contents('temp/tempoUsers.json'), true);
        }

        if (isset($tempoUsers[$_SESSION['username']])) {
            $tempoUsers[$_SESSION['username']] += $tempo_jogado;
        } 
        else {
            $tempoUsers[$_SESSION['username']] = $tempo_jogado;
        }
        $_SESSION['last_login'] = time();
        file_put_contents('temp/tempoUsers.json', json_encode($tempoUsers));
    }
}