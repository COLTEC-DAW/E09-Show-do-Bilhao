<?php
session_start();
if (!isset($_SESSION["user"])) {
    header("Location: login.php");
    exit;
}
$user = $_SESSION["user"];
$usersExisting = $_SESSION["existing"];
if (isset($_POST["log-out"])) {
    foreach ($usersExisting as $key => $comparador) {
        if ($comparador == $user) {
            unset($usersExisting[$key]);
            break;
        }
    }
    $session = date("d/m/Y H:i");
    $usersExisting[] = $user;
    file_put_contents("usersJson.json", json_encode($usersExisting));
    setcookie("lastTimeSession", $session);
    session_unset();
    session_destroy();
    header("Location: login.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>Pre-Game</title>
    <link rel="stylesheet" href="./style.css">
</head>
<body>
    <div class="primeira-parte">
        <h1>Olá, <?php echo $user["username"]; ?>! Seja Bem vindo ao Show do Bilhão</h1>
        <h2>Você quer se tornar um bilionário? Let's go</h2>
        <p>Email: <?php echo $user["email"]; ?></p>
        <p>Nome: <?php echo $user["username"]; ?></p>
        <p>A última vez que você jogou: <?php echo $_COOKIE["lastTimeSession"] ?></p>
        <button class="jogar"><a href="./index.php">Jogar</a></button>
        <form method="post" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
            <input class="iniciar" type="submit" name="log-out" comparador$comparador="log-out">
        </form>
    </div>
</body>
</html>