<?php
    require "Models\Usuario.php";
    include "Info\Menu.inc";
    include "Info\Rodape.inc";

    session_start();

    if(isset($_GET['valida'])){
        $Caminho = "bancoDados\\Users\\" . $_POST['nomeusuario'] . ".json";
        if(file_exists($Caminho)){
            echo "Esse nome já é usado. Tente de novo.";
        }
        else{
            echo $_POST['nome'];
            $NovoUsuario = new Usuario($_POST['nome'], $_POST['nomeusuario'], $_POST['email'], $_POST['senha']);
            file_put_contents($Caminho, json_encode($NovoUsuario));
            header('Location: login.php?code=create');
        }
    }
?>

<!DOCTYPE html>
<html lang = "pt-br">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
</head>

<body>
    <?php echo Menu()?>
    <p>Digite seus dados</p>
    <div class="Cadastro">
        <form action="cadastro.php?validate=true" method="post">
            <fieldset>
                <legend>Dados:</legend>
                    Nome: <input type="text" size="30" name="nome"><br>
                    Email: <input type="text" size="30" name="email"><br>
                    Nome de usuário: <input type="text" size="30" name="nomeUsuario"><br>
                    Senha: <input type="password" name="senha"> <br>
            </fieldset>
            <input type="submit" value="Cadastrar">
        </form>
    </div>
    <?php echo Rodape()?>
</body>

</html>