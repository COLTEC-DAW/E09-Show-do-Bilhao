<?php
    setcookie('usuario', '', time()-3600, '/');
    header("Location: ../index.php");
?>