<?php
    $goTo = "login.php";

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        session_start();

        $_SESSION["user"] = $_POST["login"];
        $goTo = "index.php";
    }

    header("Location: $goTo");
?>