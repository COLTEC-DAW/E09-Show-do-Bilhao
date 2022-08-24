<?php 
    if(isset($_POST["enter"])) {
        session_start();

        $_SESSION['username'] = $_POST["username"];
        $username = $_SESSION['username'];

        if(!isset($_COOKIE["{$username}LastLogin"])) {
            setcookie("{$username}ScoreMax", "0");
            setcookie("{$username}LastLogin", date('d/m/Y | h:i:sa', strtotime('-3 hours')));

            header("location: index.php");
        } else {
            header("location: index.php");
        }
    } 
?>