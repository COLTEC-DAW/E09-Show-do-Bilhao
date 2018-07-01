<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/semantic-ui@2.3.2/dist/semantic.min.css">
    <link rel="stylesheet" href="/index.css">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <?php include "../components/menu.inc"?>
        <?php session_destroy() ?>
        <p>Logout feito com sucesso.</p>
        <a href="/index.php">Jogar novamente</a>
        <div id="footer">     
            <?php include "../components/footer.inc" ?>
        </div>
    </div>

    <script
    src="https://code.jquery.com/jquery-3.3.1.min.js"
    integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
    crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/semantic-ui@2.3.2/dist/semantic.min.js"></script>
</body>
</html>