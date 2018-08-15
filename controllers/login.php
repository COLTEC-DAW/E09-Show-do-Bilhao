<?php
    $user = htmlspecialchars($_POST["user"]);
    $pass = htmlspecialchars($_POST["pass"]);

    setcookie("user", $user);
    setcookie("pass", $pass);

    session_start();
    if(!isset($_SESSION["acessos"])) {
        $_SESSION["acessos"] = 1;
    } else {
        $_SESSION["acessos"]++;
    }

    header("Location: ../pages/quiz.php");
?>