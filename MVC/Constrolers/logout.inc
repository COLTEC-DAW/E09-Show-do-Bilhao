<?php 
    if(isset($_POST["logout"])) {
        unset($_SESSION["usuario"]);
        unset($_POST["logout"]);
        session_destroy();
    }
?>