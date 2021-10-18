<?php
    include "sessoesCookies.inc";
    defineAcessCookies();
    logoutSession();
    header("Location: http://localhost/DAW-E09/telaLogin.php");
?>