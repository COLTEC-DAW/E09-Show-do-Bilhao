<?php
    $user = htmlspecialchars($_POST["user"]);
    $pass = htmlspecialchars($_POST["pass"]);

    setcookie("user", $user);
    setcookie("pass", $pass);

    session_start();

    header("Location: ../pages/quiz.php");
?>