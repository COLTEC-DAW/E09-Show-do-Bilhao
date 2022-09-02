<!DOCTYPE html>

<html>
<head>
    <title>Show do Bilhão</title>
</head>

<body>
    <div><?php 
        require "usuario.class.php";
        require "funcoes.php";
        include "titulo.inc";

        if(isset($_POST['usuario'])){
            $mensagem = Login($_POST['usuario'], $_POST['senha']);
            echo ($mensagem);
        }
    ?>
        <form action='login.php' method='post'>
            <p>Usuario: </p>
            <input type=text name='usuario'><br>

            <p>Senha: </p>
            <input type=password name='senha'><br>

            <br><input type=submit name='login' value='Login'>
        </form>

        <br><a href="cadastro.php">Cadastrar</a>

    </div>
</body>
</html>