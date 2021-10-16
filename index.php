<!DOCTYPE html>
<html lang="en">
<head>
    <meta encoding="utf-8">
    <meta name="desenvolvedor" content="Laiza Ferreira">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show Do Bilhão</title>
    <link rel="stylesheet" href="./detalhes.sass" />
    <link rel="stylesheet" href="./arquivo.sass" />
</head>
<body class="body" name="pageInitial">
    <section class="cabecalho">
        <h1 class="col_12" id="titulo"> O show do Bilhão </h1>
        <p class="col_12" id="subtitulo"> </p> 
    </section>  
    <div class="container">
        <section>
            <!-- Usuário já cadastrado -->
            <form class="form" action="login.php" method="post">
                <br> Se você já tem cadastro: <br><br>
                Login: <input type="text" name="login"><br>
                Senha: <input type="password" name="senha"><br>
                <input type="hidden" name="id" value="0">
                <br><input type="submit" value="Realizar Login"><br>
            </form>

            <!-- cadastro de usuário -->
            <form class="form" action="cadastro.php" method="post">  
                <br> Se você não tiver cadastro: <br><br>
                Nome: <input type="text" name="nome"><br>
                Email: <input type="text" name="email"><br>
                Login: <input type="text" name="login"><br>
                Senha: <input type="password" name="senha"><br>
                <br><input type="submit" value="Realizar Cadastro"><br>
            </form>
        </section>
    </div>
    <footer class="col_12" id="footer">
        <p> Desenvolvimento de Aplicações Web - COLTEC/UFMG </p>
        <p> Laiza Ferreira Lage </p>
    </footer>
</body>
</html>