<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="perguntas_styles.css">
    <title>Cadastro</title>
</head>
<body>
    <?php

        include "menu.inc";

        echo '
            <form action="/autentica_cadastro.php" method="post">
                <div class="form-group">
                    <label for="validationDefault01">Usuário</label>
                    <input type="text" class="form-control" id="validationDefault01" placeholder="Usuário" name="EntradaUsuario" required>
                </div>
                <div class="form-group">
                    <label for="validationDefault02">Senha</label>
                    <input type="password" class="form-control" id="validationDefault02" placeholder="Senha" name="EntradaSenha" required>
                </div>
                <div class="form-group">
                    <label for="validationDefault03">Nome</label>
                    <input type="text" class="form-control" id="validationDefault03" placeholder="Nome" name="EntradaNome" required>
                </div>
                <div class="form-group">
                    <label for="validationDefault03">Email</label>
                    <input type="email" class="form-control" id="validationDefault03" placeholder="Email" name="EntradaEmail" required>
                </div>
                <button class="btn btn-primary" type="submit">Cadastrar</button>
            </form>
        ';

        include "rodape.inc";
    ?>
</body>
</html>