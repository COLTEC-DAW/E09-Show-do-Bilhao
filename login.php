<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css"/>
    <title>Show do Bilhão</title>
</head>
<body>
    <?php
    setcookie("premiacao");
    setcookie("time");

    $arquivo = fopen("usuarios.json", "r"); // abre o arquivo
    $users = file_get_contents("usuarios.json"); // põe o conteúdo do arquivo numa variável
    $usuariosmatriz = json_decode($users, TRUE); // decodifica o arquivo pro formato json

    if (isset($_POST['user']) && isset($_POST['email']) && isset($_POST['nome']) && isset($_POST['senha'])){
        $user = $_POST['user'];
        $email = $_POST['email'];
        $nome = $_POST['nome'];
        $senha = $_POST['senha'];

        $usuariosmatriz[] = ["user" => $user, "email" => $email, "nome" => $nome, "senha" => $senha]; // cria um novo objeto no final da matriz
        $usuariosjson = json_encode($usuariosmatriz, JSON_PRETTY_PRINT); // passa a matriz pro formato json
        file_put_contents("usuarios.json", $usuariosjson); // coloca o json no arquivo
    }
    fclose($arquivo);
    include "partials/menu.inc";
    ?>

    <div class="col16" id="logintext">
        <h2>LOGIN</h2>
    </div>
    <div class="col6" id="loginbox">
        <form action='showdobilhao.php?id=0' method='post'>
            <input type='text' placeholder='Usuário' name='user' class=col16></input>
            <input type='password' placeholder='Senha' name='senha' class=col16></input>
            <button type="submit">Enviar</button>
        </form>
        <form action='cadastro.php' method='post'>
            <button type="submit">Não possuo cadastro</button>
        </form>
        <?php
        if (isset($_COOKIE["falhaLogin"]) && isset($_COOKIE["mensagemErro"])){
            $falhaLogin = $_COOKIE["falhaLogin"];
            $mensagemErro = $_COOKIE["mensagemErro"];
            ?>
            <div class="col16" id="mensagemErro">
                <?php echo "<p> $mensagemErro </p>"; ?>
            </div>
        }
        ?>
    </div>   
    <style>#footer { position: absolute }</style>
    <?php 
    include "partials/rodape.inc";
    ?>
</body>
</html>