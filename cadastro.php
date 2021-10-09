<?php
    // Importe de classes
    require "Models\\User.php";

    // Importe de funcionalidades
    include "Lib\\Menu.inc"; 
    include "Lib\\rodape.inc";

    // Inicialização da sessão
    session_start();

    // Válida os dados inseridos no cadastro
    if(isset($_GET['validate'])){
        $FilePath = "DataBase\\Usuarios\\" . $_POST['username'] . ".json";
        if(file_exists($FilePath)){
            echo "O Nome de usuário " . $_POST['username'] . " já está em uso. Tente novamente!";
        }else{
            echo $_POST['name'];
            $NovoUser = new User($_POST['name'],$_POST['username'],$_POST['email'],$_POST['password']);
            file_put_contents($FilePath,json_encode($NovoUser));
            header('Location: login.php?code=create');
        }    
    }
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>

    <!-- Estilo do jogo -->
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <!-- Parte superior -->
    <?php echo GetMenu() ?>

    <!-- Forms -->
    <p>
        Insira os dados necessários para realizar seu cadastro.
    </p>
    <div class="FormCadastro">
        <form action="cadastro.php?validate=true" method="post">
            <fieldset>
                <legend>Dados do jogador:</legend>
                    Nome:&#160;&#160;&#160;&#160;&#160;&#160;&#160;<input type="text" size="30" name="name"><br>
                    E-mail:&#160;&#160;&#160;&#160;&#160;&#160;         <input type="text" size="30" name="email"><br>
                    Username:       <input type="text" size="30" name="username"><br>
                    Password:&#160; <input type="password" name="password"> <br>
                </fieldset>
            <input type="submit" value="Cadastrar">
        </form>
    </div>

    <!-- Parte inferior -->
    <?php echo GetFooter() ?>
</body>
</html>