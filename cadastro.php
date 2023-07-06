<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <title>Cadastro</title>
</head>
<body>
    <div class="cadastro">
        <h1>Cadastro</h1>
        <form class="cadastro-form" method="POST" action="index.php">
            <label for="nome">Nome</label>
            <input type="text" name="nome" id="nome" class="form-field">

            <label for="pwd">Senha</label>
            <input type="text" name="senha" id="pwd" class="form-field">

            <button type="submit" name="cadastro" class="form-btn">Cadastrar</button>
        </form>
    </div>
</body>
</html>