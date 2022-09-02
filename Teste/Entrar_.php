<?php
    session_start();
    $login = $_POST['login'];
    $senha = $_POST['senha'];
    $arquivo_usuarios = json_decode(file_get_contents("Usuários.json"));
    if($arquivo_usuarios == null)
    {
        header("Location: Cadastro.php", TRUE, 301);
    }
    foreach ($arquivo_usuarios as $usuarios)
    {
        if($usuarios->login == $login && $usuarios->senha == $senha)
        {
            $_SESSION["senha"] = $_POST["senha"];
            $_SESSION["login"] = $_POST["login"];
            header("Location: Index.php", TRUE, 301);
        }
    }
    echo 'Cadastro não encontrado <br> Voltar à pagina de login: <a href="Entrar.php"><button>Voltar</button></a>';
?>