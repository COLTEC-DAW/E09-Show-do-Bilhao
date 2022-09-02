<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
        <script src="https://kit.fontawesome.com/f294d9b5b8.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="style.css">
        <title>Cadastro</title>
    </head>
    <body> 
        <h1>Show do Bilhão!</h1>
        <p>Efetue o cadastro:</p>
        <form action="verificarCadastro.php" method='post'>
            <label for="name">Nome: </label>
            <input id="name" type="text" name="name" required><br/><br/>
            <label for="email">E-mail:</label>
            <input type="email" id="email" name="email" required><br/><br/>
            <label for="login">Usuário:</label>
            <input type="text" id="login" name="login" required><br/><br/>
            <label for="password">Senha:</label>
            <input type="password" id="password" name="password" required><br/><br/>
            <button type="submit">Enviar</button>
            <a href="index.php"><button type="button">Cancelar</button></a>
        </form>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    </body>
</html>