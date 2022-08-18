<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $_SESSION['username'] = $_POST['username'];
}
if (!isset($_SESSION["username"])) {
    header("Location: cadastro.php", TRUE, 301);
}
?> 
