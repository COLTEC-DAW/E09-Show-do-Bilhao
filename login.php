<?php
session_start();
$valida = true;

// Salva as informações enviadas e, caso a resposta da soma esteja certa,
// envia o jogador para a página de perguntas
if (isset($_POST["name"]) && isset($_POST["answer"])) {
    $_SESSION["name"] = $_POST["name"];
    $_SESSION["answer"] = $_POST["answer"];
    $_SESSION["id0"] = session_id();

    if (intval($_SESSION["answer"]) == 8) {
        header("Location: /perguntas.php");
    } else {
        $valida = false;
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show do Bilhão - Login</title>
</head>

<body class="container">
    <h1>Show do Bilhão!!</h1>
    <h2>Página de identificação</h2>
    <?php
    if ($valida == false) echo "<h3>Resposta da soma incorreta. Tente novamente.</h3>";
    ?>
    <div class="form">
        <form method="post">
            <p>Nome: </p>
            <input type="text" name="name" tabindex="0"><br>
            <p>5 + 3 = ?: </p>
            <input type="number" name="answer" tabindex="0"><br>
            <button>Enviar</button>
        </form>
    </div>
</body>

</html>